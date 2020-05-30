<div id="eventsField" class="row justify-content-center">
    @foreach($events as $event)
        @include('events.components.listpage-card')
    @endforeach
</div>
