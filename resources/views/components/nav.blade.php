<nav class="navbar navbar-expand-lg bg-dark sticky-top" id="mainMenu">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <img class="border border-primary rounded-lg" src="{{asset('images/brand-logo.png')}}" alt="WeSports"
                 width="180" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-user-cog"></i><span class="caret"></span>
        </button>

        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="btn btn-outline-light " href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
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
