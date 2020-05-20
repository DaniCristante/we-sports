@extends('layouts.app')
@section('content')
    <div>
        <!--form sidebar-->
        <form>

        </form>
        <div class="">
            <h2 class="text-center">Eventos disponibles</h2>
        </div>
        <div>
            @include('wesports.events.event-list')
        </div>
    </div>

@endsection
