<div class="row justify-content-center">

    @foreach($events as $event)
        <div class="card m-2" style="width: 18rem;">
            <a href="{{url('events/'.$event['id'])}}" class="text-decoration-none">

                <img class="card-img-top" src="/{{$event['img']}}" alt="{{$event['title']}}">
                <div class="card-body">
                    <h5 class="card-title">{{$event['title']}}</h5>
                    @if(isset($event['logo']))
                    <p>
                        <i class="fas {{$event['logo']}}"></i>
                        <span class="mx-2">{{$event['name']}}</span>
                    </p>
                    @endif
                    <p>
                        <i class="fas fa-calendar-alt"></i>
                        <span class="mx-2">{{substr($event['datetime'],'0','10')}}</span>
                    </p>

                    <p>
                        <i class="fas fa-city"></i>
                        <span class="mx-2">{{$event['city']}} </span>
                    </p>

                    <p>
                        <i class="fas fa-map-marked-alt"></i>
                        <span class="mx-2">{{$event['address']}} </span>
                    </p>

                </div>

            </a>
        </div>




    @endforeach
</div>
