@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('components.header')
    <div id="homePageContent" class="mt-4">
        <h3>test</h3>
        <div id="page-title">
            <h2 class="text-center h1 text-dark">{{__('messages.homepage.most-populated')}}</h2>
        </div>
        <div id="eventsField" class="row justify-content-center">
            @foreach($events as $event)
                @include('events.components.home-card')
            @endforeach
        </div>

        <div class="col-12 text-center my-2">
            <a class="btn btn-outline-secondary p-2 p-md-3 text-center" href="{{url('/events')}}">
                {{__('messages.homepage.view-more')}}
            </a>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="{{asset('js/alerts.js')}}">
    </script>
@endsection
