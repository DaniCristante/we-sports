<?php


namespace App\ApiHandlers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CallHandler
{
    private const API_ENDPOINT = 'http://52.91.0.226:8000/api';
    private const HEADERS = [
        'Content-type' => 'application/json',
        'Accept' => 'application/json'
    ];

    public function callLogin(Request $request)
    {
        return Http::post(self::API_ENDPOINT . '/login', [
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

    public function unauthorizedGetMethodHandler(string $url)
    {
        return Http::withHeaders(self::HEADERS)->get(self::API_ENDPOINT.$url)->json();
    }
}
