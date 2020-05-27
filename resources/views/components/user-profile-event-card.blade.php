<div class="row justify-content-center">

    @foreach($events as $event)
        <div class="col-10 col-md-4 my-1 ">
            <a class="text-decoration-none" href="{{url('events/'.$event['id'])}}">
                <div class="card w-100">
                    <img class="card-img-top" src="/{{$event['img']}}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">{{$event['title']}}</h6>
                        <p>
                            <i class="fas {{$event['logo']}}"></i>
                            <span class="mx-2">{{$event['name']}}</span>
                        </p>
                        <p>
                            <i class="fas fa-calendar-alt"></i>
                            <span class="mx-2">{{substr($event['datetime'],'0','10')}}</span>
                        </p>

                        <p>
                            <i class="fas fa-map-marked-alt"></i>
                            <span class="mx-2">{{$event['city']}} </span>
                        </p>


                    </div>
                </div>
            </a>

        </div>
    @endforeach
</div>
