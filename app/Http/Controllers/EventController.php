<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $callHandler;
    public function __construct(CallHandler $callHandler)
    {
        $this->callHandler = $callHandler;
    }

    /***  RETURN VIEW AND CREATE EVENT   */
    public function createEvent()
    {
        //TODO des de la api necessitari un get con todas las categorias y sus id's
        $response = $this->callHandler->unauthorizedGetMethodHandler('/sports');
        $sports = [];

        foreach ($response as $sport){
            array_push($sports, [
                'id' => $sport['id'],
                'name' => $sport['name']
            ]);
        }

        return view('wesports.events.create', array('sports' => $sports));
    }


    public function storeEvent(Request $request)
    {
        $token = $request->session()->get('api_token');
        $response = $this->callHandler->authorizedPostMethodHandler('/events', $token, $request->all());
        dump($response->status());die();
        return response()->json([
            'event' => $request->all(),
            'status' => 'Evento se ha creado.'
        ]);

        //TODO backend logic

    }


    /*** END OF  RETURN VIEW AND CREATE EVENT   */
}
