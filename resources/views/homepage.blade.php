@extends('layouts.app')
@section('content')


    {{--    PORTADA--}}

    <div id="coverImage">

    </div>

    <!--
    TEST PARA VER SI TENEMOS EL TOKEN ASIGNADO
                NO BORRAR PORFA
-->

    <a href="{{url('test')}}">TEST PARA VER TOKEN</a>
    <br>
    <a href="{{url('events/create')}}">CREAR EVENTO</a>

    <div id="page-title">
        <h1 class="text-center">Eventos más destacados</h1>
    </div>

    @include('wesports.events.event-list')

    <div class="col-12 text-center">
        <a class="btn btn-outline-secondary p-2 p-md-3 text-center" href="{{url('/events/all')}}">Ver mas
            eventos</a>
    </div>


@endsection

@section('scripts')
    {{--    <script src="{{asset('js/get-events.js')}}">--}}
    {{--    </script>--}}
@endsection
