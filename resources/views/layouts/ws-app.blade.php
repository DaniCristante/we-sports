<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--    Styles--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>


<x-header></x-header>
<div class="container-fluid mt-2">
    @yield('content')

</div>
<x-footer></x-footer>

@yield('scripts')


</body>
</html>