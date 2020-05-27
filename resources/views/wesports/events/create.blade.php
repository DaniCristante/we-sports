@extends('layouts.app')
@section('title', 'Crear evento')
@section('content')
    <div class="container my-5">
        <div class="col-12  col-md-8 m-auto">
            <div class="row align-items-center justify-content-between form-title mb-2 ">
                <h4 class="mr-2"> Crear evento </h4>
                <img src="{{asset('images/favicon.png')}}" alt="WeSports"
                     class="float-left border rounded-lg border-secondary" width="40" height="40">
                @include('components.event-form')
            </div>
        </div>
    </div>
@endsection
