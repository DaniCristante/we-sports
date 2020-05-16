<?php


namespace App\ApiHandlers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CallHandler
{
    private const API_ENDPOINT = 'http://52.91.0.226:8000';

    public function callLogin(Request $request)
    {
        return Http::post(env('API_ENDPOINT') . '/api/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
    }

    public function getToken(Request $request){
        $response = $this->callLogin($request);
        if ($response->status() === 200) {
            $jsonResponse = $response->json();
            return $jsonResponse['access_token'];
        }
        return null;
    }
}
