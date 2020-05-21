@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row align-items-center">
            {{--Only homepage cover header--}}
            <header id="homePageHeader" class="container-fluid  p-2 bg-dark">
                <div class="col-12">
                    <h2 class="text-center">Bienvenido a WeSports</h2>
                    <h4 class="p-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias dolorem eligendi error
                        eum
                        harum ipsam libero, modi molestias obcaecati odit pariatur perferendis quidem rem sit, soluta
                        totam.
                        Beatae, officiis.
                    </h4>
                </div>
            </header>
        </div>

        {{--   Home page filter  --}}


        <form class="form-group my-2 row col-12 justify-content-center">
            @csrf
            <div class=" col-10 col-md-4 m-1">
                <input type="text" class="form-control text-center" name="sport" placeholder="¿qué quieres jugar ?">
            </div>
            <div class=" col-10 col-md-4 m-1">
                <input type="password" class="form-control text-center " name="city"
                       placeholder="¿dónde quieres jugar ? ">
            </div>
            <button type="submit" class="btn btn-outline-success">Ver eventos disponibles</button>
        </form>

    </div>


    <!--
    TEST PARA VER SI TENEMOS EL TOKEN ASIGNADO
                NO BORRAR PORFA
-->

    <a href="{{url('test')}}">TEST PARA VER TOKEN</a>
    <br>
    <a href="{{url('events/create')}}">CREAR EVENTO</a>


    <div id="homePageContent">
        <div id="page-title">
            <h1 class="text-center">Eventos recientemente creados </h1>
        </div>
        @include('wesports.events.event-list')

        <div class="col-12 text-center my-2">
            <a class="btn btn-outline-secondary p-2 p-md-3 text-center" href="{{url('/events')}}">Ver mas
                eventos</a>
        </div>
    </div>
    </div>


@endsection

@section('scripts')
    {{--    Scroll Header Option --}}
    {{--    <script src="{{asset('js/homePageActions.js')}}">--}}
    {{--    </script>--}}
@endsection
