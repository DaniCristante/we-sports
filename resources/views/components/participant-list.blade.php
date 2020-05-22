<div id="list-container" class="text-center">
    <a class="btn btn-light my-1  collapsed border border-secondary  text-uppercase" data-toggle="collapse" data-target="#list-parent">
       Lista de participantes
    </a>
    <ul id="list-parent" class="list-group collapse " >

        @foreach($participants as $participant)
            <li class="my-1 participant-list text-uppercase">{{$participant['nickname']}}</li>
        @endforeach
    </ul>
</div>
