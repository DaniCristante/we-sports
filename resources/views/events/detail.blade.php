@extends('layouts.app')
@section('title', $event['title'])
@section('content')

    <div id="detail-container">
        @if (session('updated'))
            <div id="alerts" class="alert alert-success text-center">
                {{session('updated')}}
            </div>
        @endif
        <div class="row justify-content-center">
            <div id="jumbotron-event" class="jumbotron-fluid p-2 my-1 mx-2 col-8 bg-transparent">
                <h1 class="display-4 text-secondary">{{$event['title']}}</h1>
                <div id="image" class="row justify-content-center">
                    <div id="detail-image-container"
                         class="media-container embed-responsive embed-responsive-16by9 col-10 col-md-7">
                        <img id="detail-image" class="embed-responsive-item detalled-image" alt="{{$event['title']}}"
                             src="{{'/'.$event['img']}}">
                    </div>
                </div>
                <hr class="bg-secondary">
                <div class="row justify-content-around">
                    <div class="col-12 col-md-5 text-dark text-uppercase">
                        <p>
                            <i class="fas fa-city"> <span class="mx-1"> {{$event['city']}}</span></i>
                        </p>

                        <p>
                            <i class="fas fa-map-marked-alt"><span class="mx-1"> {{$event['address']}}</span></i>
                        </p>

                        <p>
                            <i class="fas fa-calendar"> <span class="mx-1"> {{$event['datetime']}}</span></i>
                        </p>
                    </div>
                    <div class="col-12 col-md-5 text-justify">
                        <p class="text-dark-50">{{$event['description']}}</p>
                    </div>
                </div>
            </div>
            @include('components.participant-list')
        </div>
        <div class="my-3">
            <div class="text-center">
                <h3 class="text-secondary">Eventos Relacionados</h3>
                <hr class="bg-secondary">
                @include('events.components.related-events')
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        let listParent = document.getElementById('list-parent');
        let eventId = {!! json_encode($event['id']) !!};
        let userId = {!! json_encode($loggedUserId) !!};
        let token = {!! json_encode($token) !!};
        let isParticipating = {!! json_encode($isParticipating) !!};
        let numberOfParticipants = {!! json_encode($event['current_participants']) !!};
        let postParticipantUrl = 'http://52.91.0.226:8000/api/participants';
        let userUrl = 'http://52.91.0.226:8000/api/users/';
        let participantsUrl = 'http://52.91.0.226:8000/api/events/' + eventId + '/participants';
        if (isParticipating === 1) {
            $('#delete-button').show();
            $('#participate-button').hide();
        } else {
            $('#delete-button').hide();
            $('#participate-button').show();
        }
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
                url: postParticipantUrl,
                type: "POST",
                success: function (result) {
                    let successElement = document.createElement('p');
                    successElement.innerText = 'Actualizando lista...';
                    successElement.setAttribute('id', 'successfull-action-message');
                    successElement.setAttribute('class', 'alert alert-success mt-2');
                    $('#button-container').append(successElement);
                    $.ajax
                    ({
                        headers: {
                            Accept: 'application/json',
                            'Content-type': 'application/json',
                        },
                        url: userUrl + result.user_id,
                        method: "GET",
                        success: function (result) {
                            $('#button-container').append(successElement);
                            let participantElement = document.createElement('li');
                            participantElement.innerText = result.nickname;
                            participantElement.setAttribute('class', 'my-1 participant-list text-uppercase text-dark');
                            listParent.appendChild(participantElement);
                            document.getElementById('current-participants').innerText = numberOfParticipants + 1;
                            numberOfParticipants += 1;
                            $('#participate-button').hide();
                            $('#delete-button').show().prop("disabled", true);
                            successElement.innerHTML = 'Lista actualizada ¡Gracias por participar!';
                            setTimeout(function () {
                                $('#successfull-action-message').remove();
                                $('#delete-button').prop("disabled", false);
                            }, 2500)
                        }
                    })
                }
            })
        })
        $('#delete-button').click(function () {
            $.ajax
            ({
                headers: {
                    'Authorization': 'Bearer ' + token,
                },
                data: {
                    'user_id': userId,
                    'event_id': eventId,
                },
                url: postParticipantUrl,
                type: "DELETE",
                success: function (result) {
                    let successElement = document.createElement('p');
                    successElement.innerText = 'Actualizando lista...';
                    successElement.setAttribute('id', 'successfull-action-message');
                    successElement.setAttribute('class', 'alert alert-warning mt-2');
                    $('#button-container').append(successElement);
                    $.ajax
                    ({
                        headers: {
                            'Accept': 'application/json',
                            'Content-type': 'application/json',
                        },
                        url: participantsUrl,
                        method: "GET",
                        success: function (result) {
                            $('#list-parent').empty();
                            for (var i = 0; i < result.length; i++) {
                                let participantElement = document.createElement('li');
                                participantElement.setAttribute('class', 'my-1 participant-list text-uppercase text-dark');
                                participantElement.innerText = result[i].nickname;
                                listParent.appendChild(participantElement);
                            }
                            $('#participate-button').show().prop("disabled", true);
                            $('#delete-button').hide();
                            document.getElementById('current-participants').innerText = numberOfParticipants - 1;
                            numberOfParticipants -= 1;
                            successElement.innerHTML = 'Lista actualizada, esperamos verte en otros eventos :)';
                            setTimeout(function () {
                                $('#successfull-action-message').remove();
                                $('#participate-button').show().prop("disabled", false);
                            }, 2500)
                        }
                    })
                }
            })
        })
    </script>
    <script src="{{asset('js/alerts.js')}}"></script>
@endsection
