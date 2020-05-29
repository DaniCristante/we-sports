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
    <nav class="navbar navbar-expand-lg bg-dark sticky-top" id="mainMenu">
        <div class="container align-items-start">
            <div class="col-8">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img class="border border-primary rounded-lg" src="{{asset('images/brand-logo.png')}}" alt="WeSports"
                         width="180" height="40">
                </a>
            </div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav col-4">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item ">
                        <a class="btn btn-outline-light " href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a>
                    </li>
                @else
                    <li class="nav-item dropdown ">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user-cog"></i> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-left col-12" aria-labelledby="navbarDropdown"
                             id="userDropDownMenu">
                            <a class="dropdown-item" href="{{url('/dashboard')}}">Gestión de cuenta y eventos</a>
                            <a class="dropdown-item" href="{{url('/profile/'.Auth::user()->nickname)}}">Ver mi
                                perfil</a>
                            <a class="dropdown-item" href="{{url('/events/create')}}">Crear evento</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

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
