<div id="participation-record" class="pt-4">
    <h3 class="form-title my-3">Eventos participados</h3>
    @foreach($eventParticipations as $event)

        <a href="{{url('events/'.$event['id'])}}" class="text-decoration-none">
            <div class="row  justify-content-around border border-primary m-0 my-2 p-3  admin-event-card">

                <div class="col-12 col-md-4">
                    <p>
                        Evento : <strong> {{$event['title']}} </strong>
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <p>
                        <i class="fa fa-calendar-alt"></i>  <strong>{{substr($event['datetime'],0,16)}} </strong>
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <p>
                        <i class="fas fa-map-marker"></i> <strong> {{$event['city']}} </strong>
                    </p>
                </div>

            </div>
        </a>
    @endforeach

</div>

