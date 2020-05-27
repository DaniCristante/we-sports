<div class="row justify-content-center">

    @foreach($events as $event)
        <div class="col-12 col-md-5 m-2 row justify-content-center">
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="../images/favicon.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$event['title']}}</h5>

                    <i class="fas fa-user"></i><span>Organizador:</span><a class="text-decoration-none"
                                                                           href="{{url('/profile/'.$event['nickname'])}}">{{$event['nickname']}}</a><br>
                    <span class="fas {{$event['logo']}}">Categoria: {{$event['name']}}</span><br>

                    <div class="card-text">
                        <x-progress-bar :event="$event"/>
                    </div>
                    <span
                        class="fas fa-calendar-alt"> {{$event['datetime']}}  </span> <br>
                    <span class="fas fa-compass"> {{$event['address']}}    </span>
                    <br>
                    <a href="#" class="btn btn-outline-success my-2 w-100">Ver evento</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
