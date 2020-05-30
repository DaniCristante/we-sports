@extends('layouts.app')
@section('title', 'Crear evento')
@section('content')
    <div class="my-5">
       @include('events.components.create-form')
    </div>
@endsection
