@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div id="alert_register" class="alert alert-success mb-0 text-center">
            {{ session('status') }}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row align-items-center">
            {{--Only homepage cover header--}}
            <header id="homePageHeader" class="container-fluid  p-2 bg-dark">
                <div class="col-12">
                    <h2 class="text-center">Bienvenido a WeSports</h2>
                    <div id="web-abstract">
                        <h4 class="p-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias dolorem eligendi
                            error
                            eum
                            harum ipsam libero, modi molestias obcaecati odit pariatur perferendis quidem rem sit,
                            soluta
                            totam.
                            Beatae, officiis.
                        </h4>
                    </div>
                </div>
                <div class="container">
                    <div class="">
                        <h4 class="text-center">Filtra por ciudad, fecha o deporte</h4>
                    </div>
                    <form action="{{url('events')}}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                        <input type="text" name="city" class="form-control search-slt"
                                               placeholder="Ciudad">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                        <input type="date" name="date" class="form-control search-slt"
                                               placeholder="Fecha">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                        <select class="form-control search-slt" name="sport" id="sportsList">
                                            <option value="none" disabled hidden selected>- Selecciona un deporte -
                                            </option>
                                            @foreach($sports as $sport)
                                                <option value="{{$sport['id']}}">{{$sport['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                        <input type="submit" name="submit" class="btn btn-secondary wrn-btn"
                                               value="Buscar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </header>
        </div>
    </div>
    @if ($message = Session::get('created-event'))
        <h3 class="alert alert-success">{{$message}}</h3>
    @endif
    <div id="homePageContent">
        <div id="page-title">
            <h1 class="text-center">Eventos con más participantes</h1>
        </div>
        @include('wesports.events.event-list')

        <div class="col-12 text-center my-2">
            <a class="btn btn-outline-secondary p-2 p-md-3 text-center" href="{{url('/events')}}">Ver mas
                eventos</a>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="{{asset('js/register_alert.js')}}">
    </script>
@endsection
