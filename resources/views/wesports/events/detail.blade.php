@extends('layouts.app')

@section('content')
    <div class="">
        <h1>{{$event['title']}}</h1>
        <h3>{{$event['id']}}</h3>
        @include('components.participant-list')
        <p id="result"></p>
        @if ($loggedUserId != null)
        <button id="participate-button" class="btn btn-primary">Participar</button>
        @else
            <a href="{{url('login')}}">Inicia sesión para participar</a>
        @endif
    </div>
@endsection


@section('scripts')
    <script>
        let listParent = document.getElementById('list-parent');
        let eventId = {!! json_encode($event['id']) !!};
        let url = 'http://52.91.0.226:8000/api/events/' + eventId + '/participants';
        $('#participate-button').click(function () {
            $.ajax
            ({
                xhrFields: {cors: false},
                accepts: "application/json",
                url: url,
                type: "GET",
                success: function (result) {
                    $("#result").innerText = JSON.stringify(result);
                    console.log(result);
                }
            })
        })
    </script>
@endsection
