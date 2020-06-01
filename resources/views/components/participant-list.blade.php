<div class="col-md-3 col-12 justify-content-center align-items-center my-3 bg-info p-3 border rounded-lg">
    <div class="col-12 text-center">
        <p class="text-success col-12">
            <i class="fas fa-user-check"><span class="mx-1">{{__('messages.participant-list.organizator')}} <a class="text-success border-bottom border-success text-decoration-none"
                        href="{{url('/profile/'.$event['nickname'])}}">{{$event['nickname']}}</a></span></i>

        </p>
        <p class="text-uppercase" id="participant-list"><span
                id="current-participants">{{$event['current_participants']}}</span>
            / {{$event['max_participants']}} {{__('messages.participant-list.participants')}}

    </div>

    <div class="col-12 text-center text-uppercase my-2">

        <div id="button-container">
            @if($event['current_participants'] === $event['max_participants'])
                <p class="text-danger">{{__('messages.participant-list.full')}}</p>
            @else
                @if ($loggedUserId != null)
                    <button id="participate-button" class="btn btn-success">{{__('messages.participant-list.join')}}</button>
                    <button id="delete-button" class="btn btn-warning">{{__('messages.participant-list.leave')}}</button>
                @else
                    <a href="{{url('login')}}" class="btn btn-success">{{__('messages.participant-list.login')}}</a>
                @endif
            @endif
        </div>
    </div>

    <hr class="bg-secondary">

    <div id="list-container" class="col-12 text-center justify-content-center " data-spy="scroll"
         data-target="#list-parent">
        <a class="btn btn-dark my-1  collapsed  bg-dark border border-secondary rounded-lg  text-uppercase w-100"
           data-toggle="collapse" data-target="#list-parent">
            <h5 class="text-center m-auto">{{__('messages.participant-list.list-title')}}</h5>
        </a>
        <ul id="list-parent" class="list-group collapse">

            @foreach($participants as $participant)
                <li class="my-1 participant-list text-uppercase text-dark">{{$participant['nickname']}}</li>
            @endforeach
        </ul>
    </div>

</div>

<script>
    $(document).ready(function () {
        $('#list-parent').addClass('show');
    })
</script>
