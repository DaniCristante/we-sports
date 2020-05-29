<?php

namespace App\Http\Controllers;

use App\ApiHandlers\CallHandler;
use App\ImageManager\ImageManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    private $imageManager;
    private $callHandler;

    public function __construct(ImageManager $imageManager, CallHandler $callHandler)
    {
        $this->middleware('auth');
        $this->imageManager = $imageManager;
        $this->callHandler = $callHandler;
    }

    public function showAdminPanel(Request $request)
    {
        $token = $request->session()->get('api_token');
        $response = $this->callHandler->authorizedGetMethodHandler('/user', $token);
        $userId = Auth::user()->getAuthIdentifier();
        if ($response->status() === 200) {
            $userData = $response->json()['user'];
            $userEvents = $this->getUserEvents($userId);
            $eventParticipations = $this->getUserParticipations($userId);
            return view('manager.panel', [
                'data' => $userData,
                'userEvents' => $userEvents,
                'eventParticipations' => $eventParticipations
            ]);
        } //TODO Else
    }

    public function updateUser(Request $request)
    {
        $userId = Auth::user()->getAuthIdentifier();
        $userToken = $request->session()->get('api_token');
        $userData = $request->all();
        unset($userData['_token']);
        $userData['id'] = $userId;

        if ($request->file('uimg')){
            $imagePath = $this->imageManager->moveProfileImage($request['uimg']);
            if ($imagePath !== null){
                $userData['uimg'] = $imagePath;
            }
        }

        $response = $this->callHandler->authorizedPostMethodHandler('/users/update',  $userToken, $userData);
        if ($response->status() !== 200){

        }

        return redirect()->back()->with('updated-user', 'Usuario actualizado correctamente');
    }

    public function getUserEvents($userId)
    {
        $requestUrl = '/users-events/'.$userId;
        return $this->callHandler->unauthorizedGetMethodHandler($requestUrl);
    }

    public function getUserParticipations($userId)
    {
        $requestUrl = '/participating-events?user_id='.$userId;

        return $this->callHandler->unauthorizedGetMethodHandler($requestUrl);
    }
}
