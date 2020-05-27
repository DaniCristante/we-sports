@extends('layouts.app')

@section('content')
    @if(!isset($user))
        <div class="text-center">
            <h3 class="alert alert-danger">Usuario no encontrado</h3>
            <a href="{{'/'}}">Volver al home</a>
        </div>

    @else

        <div class="container-fluid">
            <div class="row justify-content-center my-3  p-1">
                <div class="col-8 col-md-6 col-lg-3 mb-4    border border-primary" style="max-height: 800px">
                    <img class="img-fluid my-1 p-5"
                         src="/{{$user['uimg']}}"
                         alt="Card image cap">

                    <div class=" p-2 my-2">
                        <h5>
                            {{$user['uname']}} {{$user['surnames']}}
                        </h5>
                        <p>
                            <i class="fas fa-portrait mx-2 my-1"></i>{{$user['nickname']}}
                        </p>
                        <p>
                            <i class="fas fas fa-map-marked-alt mx-2"></i>{{$user['city']}}
                        </p>
                        <p>
                            <i class="fas fa-at my-1 mx-2"></i>{{$user['email']}}
                        </p>
                        <p>
                            <i class="fas fa-mobile-alt my-1 mx-2"></i>{{$user['phone']}}
                        </p>


                    </div>

                </div>


                <div class="col-12 col-lg-8  ml-md-1 row  justify-content-center ">
                    <div class="my-2 text-center row m-0 p-0 justify-content-center   ">
                        <ul class="list-group list-group-horizontal text-center">
                            <li class="list-group-item btn " id="eventsBtn">
                                <i class="far fa-calendar-plus mx-1"></i>Eventos creados
                            </li>
                            <li class="list-group-item btn" data-toggle="collapse" id="eventsParticipateBtn"
                                data-target="#eventosParticipados">
                                <i class="far fa-calendar-check mx-1"></i>Eventos participados
                            </li>

                        </ul>
                    </div>
                    <div id="userContentField">
                        <div class="col-12 p-2" id="usersEvents">
                            <x-user-profile-event-card :events="$createdEvents"/>
                        </div>
                        <div class="col-12 p-2 " id="usersEventsParticipate">

                            {{--TODO cambiar $createdEvents por eventos participados del usuario--}}
                            <x-user-profile-event-card :events="$createdEvents"/>
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
