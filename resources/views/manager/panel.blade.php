@extends('layouts.app')
@section('title', 'Gestionar perfil')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top justify-content-between align-items-center">
        <button class="navbar-toggler sideMenuToggler mr-4 bg-secondary float-left" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{url('/dashboard')}}">WeSports <i class="fas fa-user-cog mx-1 text-danger"></i></a>
        <a href="{{url('/')}}" class="float-right text-white"> <span class="mx-2">Home</span><i
                class="fas fa-sign-out-alt"></i></a>
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
    <script src="{{asset('js/alerts.js')}}"></script>
    <script src="{{asset('js/admin-panel.js')}}"></script>
    <script src="{{asset('js/validation/form-validation.js')}}"></script>
@endsection
