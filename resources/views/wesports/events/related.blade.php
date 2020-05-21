<div id="related-events">
    <div class="title text-center">
        <h3>Eventos relacionados con este deporte</h3>
    </div>
    <div class="related-events-container d-flex flex-row flex-wrap">
        @foreach($relatedEvents as $relatedEvent)
            <div class="card col-4">
                <div class="card-header">
                    <div class="card-title">
                        <h3>{{$relatedEvent['title']}}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <p>{{$relatedEvent['description']}}</p>
                </div>
            </div>
        @endforeach
    </div>

</div>
