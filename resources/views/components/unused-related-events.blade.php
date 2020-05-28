<div class="gallery d-flex flex-xl-row flex-lg-column flex-md-column flex-sm-column flex-wrap justify-content-center">
        @foreach($relatedEvents as $event)
            <div class="col-3 justify-content-between justify-content-md-center d-flex flex-column">
                <div class="picture-square">
                    <img class="gallery-image" src="/{{$event['img']}}">
                </div>
                <div class="text-center mr-auto ml-auto">
                    <h6 class="">{{$event['title']}}</h6>
                    <p>{{$event['current_participants']}} de {{$event['max_participants']}} participantes</p>
                    <p>{{$event['datetime']}}</p>
                    <a href="{{url('events/'.$event['id'])}}" class="btn btn-info ">Ver evento</a>
                </div>
            </div>
        @endforeach
</div>
