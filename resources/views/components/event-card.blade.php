
    <div class="card p-2">
        <div class="row p-1 justify-content-around">
            <div class="col-12 col-xs-3 col-lg-4 text-center">
                <img class="border rounded-lg bg-info" src="../images/favicon.png" alt=" ${event.title} "
                     width="145"/>
            </div>
            <div class="col-12 col-xs-8 col-lg-7 ">
                <div class="card-title"><h4>{{$event['title']}}</h4>
                    <span class="fas fa-id-card"> by {{$event['creator_id']}}</span>
                </div>
                <span class="fas fa-bicycle">{{$event['sport_id']}}</span><br>
                <span class="fas fa-users"> {{$event['current_participants']}} / {{$event['max_participants']}} (progress bar) </span>
                <span class="fas fa-users"> {{$event['datetime']}} </span>
            </div>
        </div>

        <div class="card-body col-12">
            <p class="text-black-50">{{$event['description']}}</p>
            <hr class="bg-primary">
        </div>
        <div class="card-footer">
            <a href="" class="float-left btn btn-info">Ver evento</a>
            <a href="" class="float-right btn btn-success">Participar</a>
            <a class="btn btn-outline-secondary p-2 p-md-3 text-center" href="/events/1">Ver mas
                eventos</a>
        </div>
    </div>
