<?php


namespace App\ApiHandlers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * Clase para englobar todas las llamadas a la API
 * y que no se repita la lógica en los controladores.
 * Tiene clases para los distintos metodos GET, POST, etc. Así como
 * también para aquellas url que requieran de AUTH o no.
 * Class CallHandler
 * @package App\ApiHandlers
 */
class CallHandler
{
    /**
     * URL de la API
     */
    private const API_ENDPOINT = 'http://52.91.0.226:8000/api';

    /**
     * Headers requeridos para llamar a la api.
     */
    private const HEADERS = [
        'Content-type' => 'application/json',
        'Accept' => 'application/json'
    ];

    /**
     * Llamamos al login de la api y retornamos la respuesta
     * de esta llamada.
     * @param Request $request
     * @return \Illuminate\Http\Client\Response
     */
    public function callLogin(Request $request)
    {
        return Http::post(self::API_ENDPOINT . '/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
    }

    /**
     * Llamamos al this->login y si la respuesta nos retorna
     * un 200, pasamos a retornar el token del usuario.
     * Este se guardará en session en el LoginController si no es null.
     * @param Request $request
     * @return mixed|null
     */
    public function getToken(Request $request){
        $response = $this->callLogin($request);
        if ($response->status() === 200) {
            $jsonResponse = $response->json();
            return $jsonResponse['access_token'];
        }
        return null;
    }

    /**
     * Función para llamar a aquellas urls de la API que acepten método GET
     * sin autorización,
     * @param string $url
     * @return array
     */
    public function unauthorizedGetMethodHandler(string $url)
    {
        return Http::withHeaders(self::HEADERS)->get(self::API_ENDPOINT.$url)->json();
    }
}
