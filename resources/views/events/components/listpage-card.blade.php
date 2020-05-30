<div class="col-11  col-md-12 m-1 card p-2">
    <div class="row p-1 justify-content-around align-items-center">
        <div class="col-10 col-xs-3 col-lg-4 text-center embed-responsive embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="{{$event['img']}}"
                 alt="{{$event['title']}}">
        </div>

        <div class="col-12 col-xs-8 col-lg-7 px-5 px-md-2 pl-lg-3 pl-md-5 pt-md-2 pt-sm-2">
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
                <i class="fas fa-users mr-2"></i>{{__('messages.card.participants', [
                                'curr' => $event['current_participants'], 'max' => $event['max_participants']])}}

            </span>

            <span class="d-block">
                <i class="fas fa-calendar-alt mr-2"></i> {{substr($event['datetime'],0,10)}} <span
                    class="btn-warning ">{{substr($event['datetime'],-9,6)}}</span>
            </span>

            <span class="d-block">
                <i class="fas fa-map-marked-alt mr-2"></i> {{$event['city']}}
             </span>

            <span class="d-block mr-2">
                    <x-progress-bar :event="$event"/>
            </span>
        </div>

    </div>
    <div class="card-body col-12">
        <p class="text-black-50">
            {{$event['description']}}
        </p>

    </div>

    <div class="card-footer bg-white mr-auto ml-auto">
        <a href="{{url('events/'.$event['id'])}}" class="float-left btn btn-info ">
            {{__('messages.card.view')}}</a>
    </div>
</div>
