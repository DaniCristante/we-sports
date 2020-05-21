<div id="list-container" class="">
    <h4>Participantes</h4>
    <ul id="list-parent">
        @foreach($participants as $participant)
            <li>{{$participant['nickname']}}</li>
        @endforeach
    </ul>
</div>
