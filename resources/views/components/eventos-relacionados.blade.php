<div class="row justify-content-center my-4">

    <div class="col-11 col-md-6 p-2  my-3 bg-white border border-secondary rounded-lg">
        <h4 class="text-center">EVENTOS RELACIONADOS</h4>
    </div>

    {{--            Releted events carousel--}}
    <div class="col-12">
        <div id="reletedEventsAds" class="carousel slide my-2 border border-info rounded-lg p-2"
             data-ride="carousel">
            <div class="carousel-inner">
                @foreach($relatedEvents as $event)
                    <div class="carousel-item  p-2 m-3 mx-md-5 p-md-4">
                        <div class="row justify-content-center">
                            <div class="col-10 col-md-5">
                                <img class="img-fluid border rounded-circle releted-event-img"
                                     src="https://www.imgacademy.mx/sites/www.imgacademy.mx/files/boyssoccerpg8.jpg"
                                     alt="">
                            </div>
                            <div class="col-12 col-md-5 m-1">
                                <h4 class="text-dark p-2">
                                    {{$event['title']}}
                                </h4>
                                <p>
                                    <i class="fas fa-volleyball-ball">
                                        <span class="mx-2"> {{$event['sport_id']}} Nombre del deporte</span>
                                    </i>
                                </p>
                                <p>
                                    <i class="fas fa-map-marked-alt">
                                        <span class="mx-2"> {{$event['address']}}</span>
                                    </i>
                                </p>

                                <p>
                                    <i class="fas fa-calendar-alt">
                                        <span class="mx-2"> {{$event['datetime']}}</span>
                                    </i>
                                </p>

                                <p>
                                    <i class="fas fa-users">
                                        <span class="mx-2"> {{$event['current_participants']}} de {{$event['max_participants']}}
                                             participantes</span>
                                    </i>
                                </p>

                            </div>
                            <div class="col-8 my-3 col-md-4">
                                <a href="{{url('events/'.$event['id'])}}" class="btn btn-outline-success w-100 ">Ver
                                    evento</a>
                            </div>
                        </div>
                    </div>


                @endforeach


            </div>
            <a class="carousel-control-prev" href="#reletedEventsAds" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon p-3 bg-success border rounded-circle mr-5"
                              aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#reletedEventsAds" role="button" data-slide="next">
                        <span class="carousel-control-next-icon p-3 bg-success border rounded-circle ml-5"
                              aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<script>

    $('#reletedEventsAds').find('.carousel-item').first().addClass('active');

</script>
