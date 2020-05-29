@extends('layouts.app')
@section('title', 'Pagina no encontrada')

@section('content')

    <div class="row justify-content-center p-2 my-2 align-items-center">
        <div class="col-10 col-md-6">
            <img src="{{asset('/images/404.jpg')}}" class="img-fluid border border-secondary">
        </div>
        <div class="col-10 col-md-4 text-center">
            <h3 class="text-uppercase">OOOOOPPPPSSSS <br>página no encontrada</h3>

            <h5>Si te has perdido te recomendamos estas páginas:</h5>

            <p>

                <a href="{{url('/')}}" class="btn btn-outline-dark">Página principal</a>
            </p>
            <p>
                <a href="{{url('/events')}}" class="btn btn-outline-dark">Ver eventos</a>
            </p>

            <p>
                <a href="{{url('/login')}}" class="btn btn-outline-dark">Iniciar sesinó</a>
            </p>

        </div>
    </div>

@endsection
