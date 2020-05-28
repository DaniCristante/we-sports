<?php

namespace App\Http\Middleware;

use App\ApiHandlers\CallHandler;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfCreator
{
    private $callHandler;

    public function __construct(CallHandler $callHandler)
    {
        $this->callHandler = $callHandler;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->get('eid') || !Auth::check()){
            return redirect('/events');
        }

        $userId = Auth::user()->getAuthIdentifier();
        $eventId = $request->get('eid');
        $requestUrl = '/events/'.$eventId;

        $event = $this->callHandler->unauthorizedGetMethodHandler($requestUrl);
        if (!$event){
            return redirect('/');
        }
        $event = \reset($event);
        if ($userId !== $event['creator_id']){
            return redirect('/');
        }
        $request->attributes->add(['event' => $event]);
        return $next($request);
    }
}
