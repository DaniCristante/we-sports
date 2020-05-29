<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--    Styles--}}
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('components.nav')
    <main>
        @yield('content')
    </main>
    @if(Auth::check() and Request::url() !== 'http://52.91.0.226/events/create')
        <a href="{{url('/events/create')}}" class="float" id="createEventButton">
            <i class="fa fa-plus my-float fa-2x"></i>
        </a>
    @endif

    <footer>
        @include('components.footer')
    </footer>

</div>

@yield('scripts')

</body>
</html>
