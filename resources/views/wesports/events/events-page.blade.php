@extends('layouts.app')
@section('title', 'Listado de eventos')
@section('content')
    <div class="row justify-content-around align-items-start">
        <h1 class="col-12">Eventos disponibles</h1>

        <div class="col-12 fixed-top">
            <button class="btn float-right mr-3 my-2 bg-warning" id="filterBtn">
                <i class="fas fa-filter"></i>
            </button>
        </div>

        <!--form sidebar-->
        <div class="col-10 col-md-4 my-2" id="filterForm">
            <form method="post" action="" class="form-group form p-5 p-md-3 p-lg-5">
                <h5>Filtar eventos</h5>
                @csrf
                <select name="sport" class="form-control my-1">
                    <option selected disabled>Filtro de deportes</option>
                    @foreach($sports as $sport)
                        <option value="{{$sport['id']}}">{{$sport['name']}}</option>
                    @endforeach
                </select>
                <input type="text" name="city" placeholder="Ciudad" class="form-control my-1">
                <input type="date" name="date" class="form-control my-1">
                <input type="submit" class="btn btn-success my-2 w-75 offset-1">
            </form>
        </div>

        <div class="col-10 col-md-7">
            @include('wesports.events.event-list')
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{asset('js/filter-form.js')}}">
    </script>
@endsection
