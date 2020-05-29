@extends('layouts.app')
@section('title', 'Gestionar perfil')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top justify-content-between align-items-center">
        <button class="navbar-toggler sideMenuToggler mr-3 bg-secondary float-left" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{url('/dashboard')}}">WeSports<span class="text-danger">User</span></a>
        <a href="{{url('/')}}" class="btn btn-danger float-right">Volver a la web <i class="fas fa-sign-out-alt"></i></a>
    </nav>

    <div class="wrapper d-flex " id="adminWrapper">
        @include('components.admin-side-menu')
        @include('components.admin-content')
    </div>

    @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

@endsection

@section('scripts')
    <script src="{{asset('js/admin-panel.js')}}"></script>
    <script src="{{asset('js/alerts.js')}}"></script>
@endsection
