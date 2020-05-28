<div class="d-flex flex-wrap justify-content-center">
    @foreach($relatedEvents as $event)
        <div class="col-lg-3 col-md-10 my-2 m-1">
            <div>
                <img class="gallery-image" src="/{{$event['img']}}">
            </div>
            <div class="text-center mr-auto ml-auto my-1">
                <h6 class="">{{$event['title']}}</h6>
                <p><i class="fas fa-users mr-2"></i>{{$event['current_participants']}} de {{$event['max_participants']}} participantes</p>
                <p><i class="fas fa-calendar-alt mr-2"></i>{{$event['datetime']}}</p>
                <a href="{{url('events/'.$event['id'])}}" class="btn btn-info ">Ver evento</a>
            </div>
        </div>
    @endforeach
</div>
