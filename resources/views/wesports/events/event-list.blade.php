@extends('layouts.app')

@section('content')
    <h3>Home events</h3>
    <div class="container">
        <div class="col-12 col-xs-9  col-md-5 m-1">
            @foreach($events as $event)
                @include('components.event-card')
            @endforeach
        </div>
    </div>
@endsection
