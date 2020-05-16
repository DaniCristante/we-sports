@extends('layouts.app')
@section('content')

<!--
    TEST PARA VER SI TENEMOS EL TOKEN ASIGNADO
                NO BORRAR PORFA
-->
<a href="{{url('test')}}">TEST PARA VER TOKEN</a>
<div class="">
    <h4>Deportes:</h4>
    <ul>
        @foreach($events as $event)
            <li>{{$event['name']}}</li>
        @endforeach
    </ul>
</div>

@endsection

@section('scripts')
    <script src="{{asset('js/get-events.js')}}">
    </script>
@endsection
