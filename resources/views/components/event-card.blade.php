<div class="col-10  col-md-5 m-1 card p-2">
    <div class="row p-1 justify-content-lg-between justify-content-center align-items-center">
        <div class="col-10  col-lg-3 ">
            <img class=" img-fluid border rounded-lg bg-info" src="{{$event['img']}}"
                 alt="  {{$event['title']}} "
                 style="min-width: 220px"/>
        </div>
        <div class="card-body col-12  col-lg-6 px-5 p-lg-2">
            <h4> {{$event['title']}}</h4>
            <span class="d-block">
            <i class="fas fa-user mr-2"></i>
            <a class="text-decoration-none" href="{{url('/profile/'.$event['nickname'])}}">{{$event['nickname']}}</a>
        </span>
            <span class="d-block">
            <i class="fas {{$event['logo']}} mr-2"></i> {{$event['name']}}
        </span>
            <span class="d-block">
            <i class="fas fa-calendar-alt mr-2"></i> {{substr($event['datetime'],0,10)}} <span
                    class="btn-warning ">{{substr($event['datetime'],-9,6)}}</span>
        </span>

            <span class="d-block">
            <i class="fas fa-map-marked-alt mr-2"></i> {{$event['city']}}
        </span>

            <span class="d-block">
                            <i class="fas fa-users mr-2"></i>  Participantes {{$event['current_participants']}} de {{$event['max_participants']}}

            </span>

        </div>
    </div>


    <x-progress-bar :event="$event"/>


    <div class="card-footer bg-white mr-auto ml-auto my-2">
        <a href="{{url('events/'.$event['id'])}}" class="float-left btn btn-info ">Ver evento</a>
    </div>
</div>
