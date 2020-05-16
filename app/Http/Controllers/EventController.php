<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    private $callHandler;
    public function __construct(CallHandler $callHandler)
    {
        $this->callHandler = $callHandler;
    }


    public function eventsList(){
        return view ('wesports.events.events-list');
    }


    public function createEvent()
    {
        $sports = $this->callHandler->unauthorizedGetMethodHandler('/sports');

        $list = [];

        foreach ($sports as $sport){
            array_push($list, [
                'id' => $sport['id'],
                'name' => $sport['name']
            ]);
        }
        return view('wesports.events.create', array('sports' => $list));
    }

    public function storeEvent(Request $request)
    {
        //TODO WORK IN PROGRESS
        $token = $request->session()->get('api_token');
        $eventData = $request->all();
        unset($eventData['_token']);
        $eventData['creator_id'] = Auth::user()->getAuthIdentifier();
        $eventData['img'] = '/test/test';
        $response = $this->callHandler->authorizedPostMethodHandler('/events', 'fasdffasdfaf', $eventData);
        dump($response);die();
    }
}
