<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use App\ImageManager\ImageManager;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('wesports.events.create', array('sports' => $list));
    }

    public function storeEvent(Request $request)
    {
        dump($request['img']);
        $imagePath = $this->imageManager->moveEventImage($request['img']);
        if ($imagePath !== null) {
            $token = $request->session()->get('api_token');
            $eventData = $request->all();
            $eventData['img'] = $imagePath;
            dump($eventData['img']);
            $eventData['creator_id'] = Auth::user()->getAuthIdentifier();
            unset($eventData['_token']);
            $response = $this->callHandler->authorizedPostMethodHandler('/events', $token, $eventData);
            dump($response);
        }
    }

    public function eventList()
    {
        $events = $this->callHandler->unauthorizedGetMethodHandler('/events/joined');
        return view('wesports.events.events-page', [
            'events' => $events
        ]);
    }

    public function filterEvents(Request $request)
    {
        $events = $this->callHandler->unauthorizedGetMethodHandler('/events/' . $request);
        return view('wesports.events.events-page', [
            'events' => $events
        ]);

    }
}
