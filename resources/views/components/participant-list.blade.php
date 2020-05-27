<div class="col-md-3 col-12 justify-content-center align-items-center my-3">
    <div class="col-12 text-center">
        <p class="text-success col-12">
            <i class="fas fa-user-check"><span class="mx-1">Organizado por {{$event['nickname']}}</span></i>

        </p>
        <p class="text-uppercase" id="participant-list"><span
                id="current-participants">{{$event['current_participants']}}</span>
            de {{$event['max_participants']}} participantes.

    </div>

    <div class="col-12 text-center text-uppercase my-2">

        <div id="button-container">
            @if ($loggedUserId != null)
                <button id="participate-button" class="btn btn-success">Apuntarse</button>
                <button id="delete-button" class="btn btn-warning">Desapuntarse</button>
            @else
                <a href="{{url('login')}}" class="btn btn-success">Inicia sesión para apuntarse</a>
            @endif
        </div>
    </div>

    <hr class="bg-secondary">

    <div id="list-container" class="col-12 text-center justify-content-center">
        <a class="btn btn-dark my-1  collapsed border border-secondary  text-uppercase col-12 text-center text-light"
           data-toggle="collapse" data-target="#list-parent">
            Lista de participantes
        </a>
        <ul id="list-parent" class="list-group collapse">

            @foreach($participants as $participant)
                <li class="my-1 participant-list text-uppercase">{{$participant['nickname']}}</li>
            @endforeach
        </ul>
    </div>

</div>
