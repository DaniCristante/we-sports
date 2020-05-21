
{{--{{dd($event)}}--}}

<div class="col-10 col-xs-9 col-md-5 m-1 card p-2">
    <div class="row p-1 justify-content-around align-items-center">
        <div class="col-12 col-xs-3 col-lg-4 text-center">
            <img class="border rounded-lg bg-info" src="../images/favicon.png"
                 alt="  {{$event['title']}} "
                 width="145"/>
        </div>
        <div class="col-12 col-xs-8 col-lg-7 ">
            <h4> {{$event['title']}}</h4>
            <span class="fas fa-user">Organizador: {{$event['nickname']}}</span><br>
            <span class="fas fa-football-ball">Categoria: {{$event['name']}}</span><br>
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
    <div class="card-footer bg-white">
        <a href="" class="float-left btn btn-info ">Ver evento</a>
        <a href="" class="float-right btn btn-success">Participar</a>
    </div>
</div>
