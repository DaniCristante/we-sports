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
                <div class="card col-10 col-md-3 mx-2 mb-4 p-2" style="max-height: 800px">
                    <img class="card-img-top border rounded-circle my-1"
                         src="https://spoiler.bolavip.com/__export/1578319752701/sites/bolavip/img/2020/01/06/peaky_blinders_sexta_temporada_crop1578318169058.jpg_1005196607.jpg"
                         alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fas fa-star 2x"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>

                        </div>
                        <h6>{{$user['uname']}} {{$user['surnames']}}</h6>
                    </div>
                    <div class="card-footer p-2 my-2">
                        <i class="d-block fab fa-facebook">
                            <span class="mx-1">Tommy Shelbby</span>
                        </i>
                        <i class="d-block fab fa-twitter">
                            <span class="mx-1">@tomy</span>
                        </i>
                        <i class="d-block fas fa-mobile-alt">
                            <span class="mx-1">{{$user['phone']}}</span>
                        </i>

                    </div>

                </div>


                <div class="col-12 col-md-8 bg-light ml-md-1   row align-content-start justify-content-center">
                    <div class="col-12 my-2 text-center row justify-content-center">
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
                        <div class="col-12" id="usersEvents">

                            <x-user-profile-event-card :events="$createdEvents"/>-

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
