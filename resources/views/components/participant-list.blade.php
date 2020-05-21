<div id="list-container" class="">
    <h4>Participantes</h4>
    <ul id="list-parent">
        @foreach($participants as $participant)
            <li>{{$participant['nickname']}}</li>
        @endforeach
    </ul>
    <div id="button-container" class="">
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
</div>
