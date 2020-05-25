<div id="eventsField" class="row justify-content-center">
    @foreach($events as $event)
        {{--        <x-event-card-v2 :event="$event"/>--}}
        @include('components.event-card-v2')
    @endforeach
</div>
