<div class="col-10  col-md-5 m-1 card p-2">
    <div class="row p-1 justify-content-lg-between justify-content-center align-items-center">
        <div class="col-10 col-xs-3 col-lg-5 text-center embed-responsive embed-responsive-16by9 ml-lg-3">
            <img class="card-img-top embed-responsive-item" src="{{$event['img']}}"
                 alt="{{$event['title']}}">
        </div>
        <div class="card-body col-12  col-lg-6 px-5 p-lg-2">
            <a href="{{url('events/'.$event['id'])}}" class="text-decoration-none"><h4> {{$event['title']}}</h4></a>

            <span class="d-block">
                <i class="fas fa-user mr-2"></i>
                <a class="text-decoration-none"
                   href="{{url('/profile/'.$event['nickname'])}}">{{$event['nickname']}}</a>
             </span>

            <span class="d-block">
                <i class="fas {{$event['logo']}} mr-2"></i> {{$event['name']}}
            </span>

            <span class="d-block">
                <i class="fas fa-calendar-alt mr-2"></i> {{substr($event['datetime'],0,10)}} <span
                    class="btn-warning ">{{substr($event['datetime'],-9,6)}}</span>
            </span>

            <span class="d-block">
                <i class="fas fa-city mr-2"></i>{{$event['city']}}
            </span>

            <span class="d-block">
               <i class="fas fa-map-marked-alt mr-2"></i> {{$event['address']}}
            </span>

            <span class="d-block">
                <i class="fas fa-users mr-2"></i>  {{__('messages.card.participants', [
                                'curr' => $event['current_participants'], 'max' => $event['max_participants']])}}
            </span>

        </div>
    </div>


    <x-progress-bar :event="$event"/>


    <div class="card-footer bg-white mr-auto ml-auto my-2">
        <a href="{{url('events/'.$event['id'])}}" class="float-left btn btn-info ">{{__('messages.card.view')}}</a>
    </div>
</div>
