<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use App\ImageManager\ImageManager;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Promise\all;

class EventController extends Controller
{
    private $callHandler;
    private $imageManager;

    public function __construct(CallHandler $callHandler, ImageManager $imageManager)
    {
        $this->callHandler = $callHandler;
        $this->imageManager = $imageManager;
    }

    public function createEvent()
    {
        $sports = $this->callHandler->unauthorizedGetMethodHandler('/sports');

        $list = [];

        foreach ($sports as $sport) {
            array_push($list, [
                'id' => $sport['id'],
                'name' => $sport['name']
            ]);
        }
        return view('events.form-page', array('sports' => $list));
    }

    public function storeEvent(Request $request)
    {
        $this->validator($request->all())->validate();

        $token = $request->session()->get('api_token');
        $eventData = $request->all();
        $eventData['creator_id'] = Auth::user()->getAuthIdentifier();
        unset($eventData['_token']);
        if ($request->file('img')) {
            $imagePath = $this->imageManager->moveEventImage($request['img']);
            if ($imagePath !== null) {
                $eventData['img'] = $imagePath;
            }
        }

        $response = $this->callHandler->authorizedPostMethodHandler('/events', $token, $eventData);
        if ($response->status() !== 201) {
            return redirect('/events/create')->with('event-failed', 'No se ha podido crear el evento');
        }
        return redirect('/')->with('status', 'Evento creado correctamente');
    }

    public function eventList(Request $request)
    {
        $sports = $this->callHandler->unauthorizedGetMethodHandler('/sports');

        $requestUrl = '/events?';
        if ($request->get('sport')) {
            $requestUrl .= 'sport=' . $request->get('sport') . '&';
        }
        if ($request->get('city')) {
            $cityParsed = $request->get('city');
            $requestUrl .= 'city=' . $this->callHandler->parseURL($cityParsed) . '&';
        }
        if ($request->get('date')) {
            $requestUrl .= 'date=' . $request->get('date') . '&';
        }
        $events = $this->callHandler->unauthorizedGetMethodHandler($requestUrl);
        return view('events.event-list-page', [
            'events' => $events,
            'sports' => $sports
        ]);
    }

    public function eventDetail(Request $request)
    {
        $url = url()->current();
        $pos_id = strrpos($url, "/", 0);
        $id = substr($url, $pos_id + 1, strlen($url));
        $requestUrl = '/events/' . $id;

        $event = $this->callHandler->unauthorizedGetMethodHandler($requestUrl);
        if (isset($event['exception'])) {
            return redirect('/events');
        }

        $event = \reset($event);
        if (empty($event)) {
            return redirect('/events');
        }

        $participants = $this->callHandler->unauthorizedGetMethodHandler($requestUrl . '/participants');
        $eventSportId = $event['sport_id'];
        $relatedEventsRequestUrl = '/events?sport=' . $eventSportId;
        $relatedEvents = $this->callHandler->unauthorizedGetMethodHandler($relatedEventsRequestUrl);
        if (in_array($event, $relatedEvents)){
            $position = array_search($event, $relatedEvents);
            unset($relatedEvents[$position]);
        }

        if (count($relatedEvents) > 3) {
            shuffle($relatedEvents);
            $relatedEvents = array_slice($relatedEvents, 0, 3);
        }
        $loggedUserId = null;
        $isParticipating = null;
        $token = null;
        if (Auth::user()) {
            $token = $request->session()->get('api_token');
            $loggedUserId = Auth::user()->getAuthIdentifier();
            $urlParticipating = '/participating?user_id=' . $loggedUserId . '&event_id=' . $id;
            $isParticipating = $this->callHandler->unauthorizedGetMethodHandler($urlParticipating);
        }

        return view('events.detail', [
            'event' => $event,
            'participants' => $participants,
            'loggedUserId' => $loggedUserId,
            'token' => $token,
            'isParticipating' => $isParticipating,
            'relatedEvents' => $relatedEvents
        ]);
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required'],
            'sport_id' => ['required'],
            'max_participants' => ['required'],
            'address' => ['required', 'string', 'max: 200'],
            'city' => ['required', 'string', 'max: 100'],
            'datetime' => ['required', 'after_or_equal:' . Carbon::now('Europe/Madrid')]
        ]);
    }

    public function deleteEvent(Request $request)
    {
        $eventId = $request->get('eid');

        $userToken = $request->session()->get('api_token');
        $requestUrl = '/events/' . $eventId;
        $response = $this->callHandler->authorizedDeleteMethodHandler($requestUrl, $userToken);

        $responseMessage = 'Evento eliminado correctamente';
        if ($response->status() !== 204) {
            $responseMessage = '¡Ups! Algo ha fallado en la petición';
        }
        return redirect()->back()->with('status', $responseMessage);
    }

    public function updateEvent(Request $request)
    {
        $event = $request->get('event');
        $datetime = $event['datetime'];
        $datetime = str_replace(" ", "T", $datetime);

        return view('events.form-page', [
            'event' => $event,
            'datetime' => $datetime
        ]);
    }

    public function sendUpdate(Request $request)
    {
        $this->editValidator($request->all())->validate();

        $userToken = $request->session()->get('api_token');
        $requestUrl = '/events/' . $request->get('id');
        $eventData = $request->all();
        unset($eventData['id']);
        unset($eventData['_token']);
        if ($eventData['datetime'] === null) {
            unset($eventData['datetime']);
        }
        if ($request->file('img')) {
            $imagePath = $this->imageManager->moveEventImage($request['img']);
            if ($imagePath !== null) {
                $eventData['img'] = $imagePath;
            }
        }
        $response = $this->callHandler->authorizedPutMethodHandler($requestUrl, $userToken, $eventData);
        if ($response->status() !== 200) {
            return redirect()->back()->with('error', 'El evento no se ha podido actualizar');
        }
        $id = $response->json()['id'];
        return redirect('/events/' . $id)->with('updated', 'Evento actualizado correctamente');
    }

    public function editValidator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required'],
            'city' => ['required', 'string', 'max: 100'],
            'address' => ['required', 'string', 'max: 200'],
            'datetime' => ['required', 'after_or_equal:' . Carbon::now('Europe/Madrid')]
        ]);
    }
}
