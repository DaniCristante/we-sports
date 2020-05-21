@extends('layouts.app')

@section('content')
    <div class="">
        <h1>{{$event['title']}}</h1>
        <h3>{{$event['id']}}</h3>
        @include('components.participant-list')
        <p id="result"></p>
        @if ($loggedUserId != null)
            @if($isParticipating === 0)
                <button id="participate-button" class="btn btn-primary">Participar</button>
            @else
                <button id="delete-button" class="btn btn-primary">Desapuntarse</button>
            @endif
        @else
            <a href="{{url('login')}}">Inicia sesión para participar</a>
        @endif
    </div>
@endsection


@section('scripts')
    <script>
        let listParent = document.getElementById('list-parent');
        let eventId = {!! json_encode($event['id']) !!};
        let userId = {!! json_encode($loggedUserId) !!};
        let token = {!! json_encode($token ?? '') !!};
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
