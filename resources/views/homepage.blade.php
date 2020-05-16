@extends('layouts.app')
@section('content')

<!--
    TEST PARA VER SI TENEMOS EL TOKEN ASIGNADO
                NO BORRAR PORFA
-->
<a href="{{url('test')}}">VER TOKEN</a>
@foreach($events as $event)
    <p>{{$event['name']}}</p><br>
@endforeach
@endsection

@section('scripts')
    <script src="{{asset('js/get-events.js')}}">
    </script>
@endsection
