<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /***  RETURN VIEW AND CREATE EVENT   */
    public function createEvent()
    {

        //TODO des de la api necessitari un get con todas las categorias y sus id's

        //Test
        $dep1 = [
            'id' => 1,
            'name' => 'Fútbol'
        ];
        $dep2 = [
            'id' => 2,
            'name' => 'Natación'
        ];
        $categorias = array($dep1, $dep2);


        return view('wesports.events.create', array('categorias' => $categorias));
    }


    public function storeEvent(Request $request)
    {

        //test
        return response()->json([
            'event' => $request->all(),
            'status' => 'Evento se ha creado.'
        ]);

        //TODO backend logic

    }


    /*** END OF  RETURN VIEW AND CREATE EVENT   */
}
