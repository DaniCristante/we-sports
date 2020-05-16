@extends('layouts.app')

@section('content')
    <h3>Home events</h3>
    <div class="container-fluid">
        <div class="row">
            @foreach($events as $event)
                @include('components.event-card')
            @endforeach
        </div>
    </div>
@endsection
