<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $callHandler;

    public function __construct(CallHandler $callHandler)
    {
        $this->callHandler = $callHandler;
    }

    public function getProfile()
    {
        $url = url()->current();
        $pos_nickname = strrpos($url, "/", 0);
        $nickname = substr($url, $pos_nickname + 1, strlen($url));
        $requestUrl = '/profile/' . $nickname;

        dump($requestUrl);
        die();
    }

}
