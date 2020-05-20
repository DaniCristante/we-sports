@extends('layouts.app')
@section('content')
    <div>
        <!--form sidebar-->
        <form method="post" action="">
            @csrf
            <select name="sport">
                @foreach($sports as $sport)
                    <option value="{{$sport['id']}}">{{$sport['name']}}</option>
                @endforeach
            </select>
            <input type="text" name="city">
            <input type="date">
            <input type="submit">
        </form>
        <div class="">
            <h2 class="text-center">Eventos disponibles</h2>
        </div>
        <div>
            @include('wesports.events.event-list')
        </div>
    </div>

@endsection
