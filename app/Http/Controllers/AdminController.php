<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    private $callHandler;

    public function __construct(CallHandler $callHandler)
    {
        $this->middleware('auth');
        $this->callHandler = $callHandler;
    }

    public function showAdminPanel(Request $request)
    {
        $token = $request->session()->get('api_token');
        $response = $this->callHandler->authorizedGetMethodHandler('/user', $token);
        $userId = Auth::user()->getAuthIdentifier();
        if ($response->status() === 200) {
            $userData = $response->json()['user'];
            $userEvents = $this->getUserEvents($userId);
            return view('manager.panel', [
                'data' => $userData,
                'userEvents' => $userEvents
            ]);
        } //TODO Else
    }

    public function updateUser(Request $request)
    {
        $this->validator($request->all())->validate();

        $userId = Auth::user()->getAuthIdentifier();
        $userToken = $request->session()->get('api_token');
        $userData = $request->all();
        unset($userData['_token']);
        $userData['id'] = $userId;
        $response = $this->callHandler->authorizedPostMethodHandler('/users/update',  $userToken, $userData);
        if ($response->status() !== 200){

        }

        return redirect()->back()->with('updated-user', 'Usuario actualizado correctamente');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'uname' => ['string', 'max:75'],
            'surnames' => ['string', 'max:150'],
            'phone' => ['integer', 'size:9']
        ]);
    }

    public function getUserEvents($userId)
    {
        $requestUrl = '/users-events/'.$userId;
        return $this->callHandler->unauthorizedGetMethodHandler($requestUrl);
    }

    public function deleteEvent(Request $request)
    {
        $eventId = $request->get('eid');
        $userToken = $request->session()->get('api_token');
        $requestUrl = '/events/'.$eventId;
        $response = $this->callHandler->authorizedDeleteMethodHandler($requestUrl, $userToken);
        if ($response->status() !== 204){

        }
        return  redirect()->back()->with('deleted-event', 'Evento eliminado correctamente');
    }
}
