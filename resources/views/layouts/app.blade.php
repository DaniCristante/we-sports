<!Doctype html>
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
<div id="app">
    <nav class="navbar navbar-expand-lg bg-dark sticky-top" id="mainMenu">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="border border-primary rounded-lg" src="{{asset('images/brand-logo.png')}}" alt="WeSports"
                     width="180" height="40">
            </a>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/events')}}">Eventos</a>
                </li>
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="btn btn-outline-light " href="{{ route('login') }}"><i
                                class="fas fa-user-circle fa-1x mr-2"></i><strong>Iniciar sesión</strong></a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->uname }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                            <a class="dropdown-item" href="{{url('/events/create')}}">Crear evento</a>
                            <a class="dropdown-item" href="{{url('/profile/'.Auth::user()->nickname)}}">Ver mi perfil</a>
                            <a class="dropdown-item" href="{{url('/dashboard')}}">Configuración de cuenta</a>

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
    @if(Auth::check() and Request::url() !== env('CREATE_EVENT_FORM_URL'))
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
