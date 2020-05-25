@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center my-3  p-1">
            <div class="card col-10 col-md-3 mr-2 p-2" style="width: 18rem;">
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

            <div class="col-12 col-md-9 bg-light ml-md-1  row align-content-start justify-content-center">
                <div class="col-12 my-2 text-center">
                    <ul class="list-group list-group-horizontal-md text-center" id="userPerfiList">
                        <li class="list-group-item collapsed" data-toggle="collapse" data-target="#eventosUsuario">
                            <i class="far fa-calendar-plus"></i>   Eventos creados
                        </li>
                        <li class="list-group-item collapsed" data-toggle="collapse" data-target="#eventosParticipados">
                            <i class="far fa-calendar-check"></i> Eventos participados</li>
                        <li class="list-group-item collapsed" data-toggle="collapse" data-target="#followers">
                            <i class="fas fa-user-friends mx-2"></i>Seguidores</li>
                    </ul>
                </div>
                <div class="col-12 collapse row" id="eventosUsuario">
                    <h3> Eventos de {{$user['nickname']}}</h3>
                    <table class="table table-responsive table-hover">
                        <thead class="thead-dark ">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Participantes</th>
                            <th scope="col">Puntuación</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($createdEvents as $event)
                            <tr>
                                <td>{{$event['title']}}</td>
                                <td>{{$event['name']}}</td>
                                <td>{{$event['datetime']}}</td>
                                <td>{{$event['address']}}, {{$event['city']}}</td>
                                <td>{{$event['current_participants']}} de {{$event['max_participants']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 collapse row" id="eventosParticipados">
                    <h3>Eventos participados</h3>
                    <table class="table table-responsive table-hover">
                        <thead class="thead-dark ">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Participantes</th>
                            <th scope="col">Puntuación</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Futbol club amigos</td>
                            <td>Fútbol</td>
                            <td>10/09/20 20:00</td>
                            <td>Calle Marina 120, Barcelona</td>
                            <td>12 de 20</td>
                            <td>
                                <div class="text-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Futbol club amigos</td>
                            <td>Fútbol</td>
                            <td>10/09/20 20:00</td>
                            <td>Calle Marina 120, Barcelona</td>
                            <td>12 de 20</td>
                            <td>
                                <div class="text-center">

                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Futbol club amigos</td>
                            <td>Fútbol</td>
                            <td>10/09/20 20:00</td>
                            <td>Calle Marina 120, Barcelona</td>
                            <td>12 de 20</td>
                            <td>
                                <div class="text-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 collapse row" id="followers">
                    <h3>Seguidores</h3>
                </div>
            </div>
        </div>
    </div>

@endsection
