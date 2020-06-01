@extends('layouts.app')
@if(isset($user))
    @section('title', $user['nickname'])
@else
    @section('title', 'Usuario no encontrado')
@endif
@section('content')
    @if(!isset($user))
        <div class="text-center mb-3">
            <h3 class="alert alert-danger">{{__('messages.profile.not-found')}}</h3>
        </div>
        <div class="my-3 text-center">
            <a href="{{url('/')}}">{{__('messages.profile.return')}}</a>
        </div>

    @else

        <div class="container-fluid">
                <div class="row justify-content-center my-3  p-1">
                    <div class="col-8 col-md-6 col-lg-3 mb-4 border border-primary">
                        <img class="img-fluid my-1 p-5"
                             src="{{'/'.$user['uimg']}}"
                             alt="Foto por defecto">
                        <div class=" p-2 my-2">
                            <h5>
                                {{$user['uname']}} {{$user['surnames']}}
                            </h5>
                            <p>
                                <i class="fas fa-portrait mx-2 my-1"></i>{{$user['nickname']}}
                            </p>
                            @if(isset($user['city']))
                                <p>
                                    <i class="fas fa-city mx-2"></i>{{$user['city']}}
                                </p>
                            @endif
                            <p>
                                <i class="fas fa-at my-1 mx-2"></i>{{$user['email']}}
                            </p>
                            @if(isset($user['phone']))
                                <p>
                                    <i class="fas fa-mobile-alt my-1 mx-2"></i>{{$user['phone']}}
                                </p>
                            @endif


                        </div>

                    </div>

                    <div class="col-12 col-lg-8  ml-md-1 row justify-content-start">
                        <div class="text-center justify-content-center col-12">
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item btn " id="eventsBtn">
                                    <i class="far fa-calendar-plus mx-1"></i>{{__('messages.profile.created')}}
                                </li>
                                <li class="list-group-item btn" data-toggle="collapse" id="eventsParticipateBtn"
                                    data-target="#eventosParticipados">
                                    <i class="far fa-calendar-check mx-1"></i>{{__('messages.profile.participations')}}
                                </li>
                            </ul>
                        </div>
                        <div id="userContentField" class="justify-content-center align-items-start">
                            <div class="col-12 p-2" id="usersEvents">
                                <x-user-profile-event-card :events="$createdEvents"/>
                            </div>
                            <div class="col-12 p-2" id="usersEventsParticipate">
                                <x-user-profile-event-card :events="$eventParticipations"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endsection

            @section('scripts')
                <script src="{{asset('js/user-profile.js')}}">

                </script>
@endsection
