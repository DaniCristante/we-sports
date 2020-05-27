{{--{{dd($event)}}--}}

<div class="col-11  col-md-5 m-1 card p-2">
    <div class="row p-1 justify-content-around align-items-center">
        <div class="col-12 col-xs-3 col-lg-4 text-center">
            <img class="border rounded-lg bg-info" src="../images/favicon.png"
                 alt="  {{$event['title']}} "
                 width="145"/>
        </div>
        <div class="col-12 col-xs-8 col-lg-7 ">
            <h4> {{$event['title']}}</h4>
            <i class="fas fa-user"></i><span>Organizador:</span><a class="text-decoration-none"
                                                                   href="{{url('/profile/'.$event['nickname'])}}">{{$event['nickname']}}</a><br>
            <span class="fas {{$event['logo']}}">Categoria: {{$event['name']}}</span><br>
            <span class="fas fa-users">  {{$event['current_participants']}} of {{$event['max_participants']}} (progress bar) </span>
            <span
                class="fas fa-calendar-alt"> {{$event['datetime']}}   (calendario js plugin) </span>
            <span class="fas fa-compass"> {{$event['address']}}    </span>
        </div>
    </div>
    <div class="card-body col-12">
        <p class="text-black-50">
            {{$event['description']}}
        </p>
    </div>
    <div class="card-footer bg-white mr-auto ml-auto">
        <a href="{{url('events/'.$event['id'])}}" class="float-left btn btn-info ">Ver evento</a>
    </div>
</div>
