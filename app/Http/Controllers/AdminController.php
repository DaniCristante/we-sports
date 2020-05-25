<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use Illuminate\Http\Request;

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
        if ($response->status() === 200) {
            $userData = $response->json()['user'];
            return view('manager.panel', [
                'data' => $userData
            ]);
        } //TODO Else
    }
}
