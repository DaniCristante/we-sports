<?php

namespace App\Http\Controllers\Auth;

use App\ApiHandlers\CallHandler;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    private $apiHandler;

    /**
     * Create a new controller instance.
     *
     * @param CallHandler $callHandler
     */
    public function __construct(CallHandler $callHandler)
    {
        $this->middleware('guest')->except('logout');
        $this->apiHandler = $callHandler;
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $token = $this->apiHandler->getToken($request);
            if ($token){
                $request->session()->put('api_token', $token);
            }
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
