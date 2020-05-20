@extends('layouts.app')
@section('content')
    <div>
        <a>holaa</a>
        <div class="">
            <h2 class="text-center">Eventos disponibles</h2>
        </div>
        <div>
            @include('wesports.events.event-list')
        </div>
    </div>

@endsection
