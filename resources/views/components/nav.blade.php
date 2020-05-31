<nav class="navbar navbar-expand-lg bg-dark sticky-top justify-content-between" id="mainMenu">
    <a class="navbar-brand" href="{{url('/')}}">
        <img class="border border-primary rounded-lg" src="{{asset('images/brand-logo.png')}}"
             alt="WeSports"
             width="180" height="40">
    </a>
    <a href="{{url('locale/en')}}" class="text-white mr-2 nav-item"><img style="height: 30px;" src="{{asset('images/en.png')}}"> </a>
    <a href="{{url('locale/es')}}" class="text-white mr-2 nav-item"><img src="{{asset('images/es.png')}}"></a>
    <a href="{{url('locale/ca')}}" class="text-white nav-item"><img style="height: 20px;" src="{{asset('images/ca.png')}}"></a>
    <button class="navbar-toggler bg-secondary text-dark" type="button" data-toggle="collapse"
            data-target="#navbarMenuContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-dark"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarMenuContent">
        @guest
            <div class="nav-item text-center">
                <a href="{{ route('register') }}" class="text-white mx-1">
                    <i class="fas fa-user-plus"></i>{{__('messages.navbar.register')}}
                </a>
                <a href="{{ route('login') }}" class="text-white mx-1">
                    <i class="fas fa-user"></i>{{__('messages.navbar.login')}}
                </a>
            </div>
    </div>

    @else
        <div class="nav-item" id="navMenuItems">
            <ul class="navbar-nav mr-auto text-white">
                <a class="dropdown-item " href="{{url('/dashboard')}}">
                    <i class="fas fa-user-cog mr-2"></i>{{__('messages.navbar.manage')}}</a>
                <a class="dropdown-item" href="{{url('/profile/'.Auth::user()->nickname)}}">
                    <i class="fas fa-user mr-2"></i>{{__('messages.navbar.my-profile')}}</a>
                <a class="dropdown-item" href="{{url('/events/create')}}">
                    <i class="fas fa-plus mr-2"></i>{{__('messages.navbar.create')}}</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-2"></i>{{__('messages.navbar.logout')}}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    @endguest
</nav>
