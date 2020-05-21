@extends('layouts.app')

@section('content')
    <div id="detail-container" class="container mb-2 mt-2">
        <div class="title text-center">
            <h1>{{$event['title']}}</h1>
        </div>
        <div id="image">
            <!--TODO pasar imagen desde la api-->
            <div id="detail-image-container" class="media-container embed-responsive embed-responsive-16by9 col-5">
                <img id="detail-image" class="embed-responsive-item" src="{{asset('images/events/cycling.jpg')}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                @include('components.participant-list')
            </div>
            <div class="col">
                <p>{{$event['description']}}</p>
                <h5> {{$event['current_participants']}} de {{$event['max_participants']}} participantes</h5>
            </div>
        </div>
        @include('wesports.events.related')
    </div>
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
