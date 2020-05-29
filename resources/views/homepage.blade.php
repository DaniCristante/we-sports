@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('components.header')
    <div id="homePageContent" class="mt-4">
        <div id="page-title">
            <h2 class="text-center h1 text-dark">Eventos con más participantes</h2>
        </div>
        {{--        @include('wesports.events.event-list')--}}
        <div id="eventsField" class="row justify-content-center">
            @foreach($events as $event)
                {{--        <x-event-ca rd-v2 :event="$event"/>--}}
                @include('components.event-card')
            @endforeach
        </div>

        <div class="col-12 text-center my-2">
            <a class="btn btn-outline-secondary p-2 p-md-3 text-center" href="{{url('/events')}}">Ver más
                eventos</a>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="{{asset('js/alerts.js')}}">
    </script>
@endsection
