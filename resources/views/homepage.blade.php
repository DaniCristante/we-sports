@extends('layouts.app')
@section('content')




    <header id="homePageHeader">
        <x-home-page-header/>
    </header>

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

    <div id="homePageContent">
        @include('wesports.events.event-list')

        <div class="col-12 text-center">
            <a class="btn btn-outline-secondary p-2 p-md-3 text-center" href="{{url('/events/all')}}">Ver mas
                eventos</a>
        </div>
    </div>



@endsection

@section('scripts')
    <script src="{{asset('js/homePageActions.js')}}">
    </script>
@endsection
