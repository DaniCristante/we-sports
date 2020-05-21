@extends('layouts.app')

@section('content')
    <div class="">
        <h1>{{$event['title']}}</h1>
        @include('components.participant-list')

        <button class="btn btn-primary" onclick="participate({{}})">Participar</button>
    </div>
@endsection


@section('scripts')
    <script>
        let listParent = document.getElementById('list-parent');
        function participate(){
            let li = document.createElement('li');
            li.innerHTML = 'hola';
            listParent.appendChild(li);
        }
    </script>
@endsection
