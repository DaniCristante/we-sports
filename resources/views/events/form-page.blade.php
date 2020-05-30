@extends('layouts.app')
@section('title', 'Crear evento')

@section('content')
    <div class="my-5">
        @if(Request::path() === 'events/create')
            @include('events.forms.create-form')
        @else
            @include('events.forms.update-form')
        @endif

    </div>
@endsection
