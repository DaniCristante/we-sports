@extends('layouts.app')
@section('title', 'Editar evento')
@section('content')
    <div class="my-5">
        @include('events.components.update-form')
    </div>
@endsection
