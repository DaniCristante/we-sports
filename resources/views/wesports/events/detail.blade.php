@extends('layouts.app')

@section('content')

{{--    {{dd($event)}}--}}
    <div class="container" id="detail-container">
        <div class="jumbotron my-1 bg-primary">
            <h1 class="display-4 text-secondary">{{$event['title']}}</h1>
            <div id="image" class="row justify-content-center">
                <!--TODO pasar imagen desde la api-->
                <div id="detail-image-container"
                     class="media-container embed-responsive embed-responsive-16by9 col-10 col-md-7">
                    <img id="detail-image" class="embed-responsive-item detalled-image"
                         src="{{asset('images/events/cycling.jpg')}}">
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="row  justify-content-around">
                <div class="col-12 col-md-4">
                    <p class="text-white-50">{{$event['description']}}</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <p class="text-success">
                        <i class="fas fa-user-check"> <span class="mx-1">
                                {{$event['creator_id']}}
                            </span> </i>
                    </p>
                    <h5 class="text-uppercase"> {{$event['current_participants']}} de {{$event['max_participants']}}
                        participantes</h5>

                    @include('components.participant-list')
                </div>
                <div class="col-12 col-md-4 text-white text-uppercase">

                    <p>
                        <i class="fas fa-map"> <span class="mx-1"> {{$event['address']}}</span></i>
                    </p>
                    <p>
                        <i class="fas fa-city"> <span class="mx-1"> {{$event['city']}}</span></i>
                    </p>
                    <p>
                        <i class="fas fa-calendar"> <span class="mx-1"> {{$event['datetime']}}</span></i>
                    </p>



                </div>


                <div class="col-12 text-center text-uppercase">
                    <hr class="bg-secondary">
                    <div id="button-container">
                        @if ($loggedUserId != null)
                            @if($isParticipating === 0)
                                <button id="participate-button" class="btn btn-success">Participar</button>
                            @else
                                <button id="delete-button" class="btn btn-warning">Desapuntarse</button>
                            @endif
                        @else
                            <a href="{{url('login')}}" class="btn btn-success">Inicia sesión para participar</a>
                        @endif
                    </div>
                </div>




            </div>

        </div>

    </div>

    {{--    <div id="detail-container" class="container mb-2 mt-2">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="jumbotron-fluid">--}}
    {{--                <h1 class="display-4">{{$event['title']}}</h1>--}}

    {{--                <div id="image" class="col-4 justify-content-center">--}}
    {{--                    <!--TODO pasar imagen desde la api-->--}}
    {{--                    <div id="detail-image-container"--}}
    {{--                         class="media-container embed-responsive embed-responsive-16by9 col-5">--}}
    {{--                        <img id="detail-image" class="embed-responsive-item detalled-image"--}}
    {{--                             src="{{asset('images/events/cycling.jpg')}}">--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-7">--}}
    {{--                    <div class="col-12">--}}
    {{--                        @include('components.participant-list')--}}

    {{--                    </div>--}}

    {{--                </div>--}}

    {{--            </div>--}}


    {{--            <div id="image">--}}
    {{--                <!--TODO pasar imagen desde la api-->--}}
    {{--                <div id="detail-image-container"--}}
    {{--                     class="media-container embed-responsive embed-responsive-16by9 col-5">--}}
    {{--                    <img id="detail-image" class="embed-responsive-item"--}}
    {{--                         src="{{asset('images/events/cycling.jpg')}}">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col">--}}
    {{--                    @include('components.participant-list')--}}
    {{--                </div>--}}
    {{--                <div class="col">--}}
    {{--                    <p>{{$event['description']}}</p>--}}
    {{--                    <h5> {{$event['current_participants']}} de {{$event['max_participants']}} participantes</h5>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            @include('wesports.events.related')--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection


@section('scripts')
    <script>
        let listParent = document.getElementById('list-parent');
        let eventId = {!! json_encode($event['id']) !!};
        let userId = {!! json_encode($loggedUserId) !!};
        let token = {!! json_encode($token) !!};
        let postUrl = 'http://52.91.0.226:8000/api/participants';
        let userUrl = 'http://52.91.0.226:8000/api/users/';
        $('#participate-button').click(function () {
            $.ajax
            ({
                headers: {
                    'Authorization': 'Bearer ' + token,
                },
                data: {
                    'user_id': userId,
                    'event_id': eventId,
                },
                url: postUrl,
                type: "POST",
                success: function (result) {
                    $.ajax
                    ({
                        headers: {
                            Accept: 'application/json',
                            'Content-type': 'application/json',
                        },
                        url: userUrl + result.user_id,
                        method: "GET",
                        success: function (result) {
                            let participantElement = document.createElement('li');
                            participantElement.innerText = result.nickname;
                            listParent.appendChild(participantElement);
                        }
                    })
                }
            })
        })
    </script>
@endsection
