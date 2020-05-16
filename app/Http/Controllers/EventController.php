<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $callHandler;
    public function __construct(CallHandler $callHandler)
    {
        $this->callHandler = $callHandler;
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
        $token = $request->session()->get('api_token');
        $response = $this->callHandler->authorizedPostMethodHandler('/events', $token, $request->all());
    }
}
