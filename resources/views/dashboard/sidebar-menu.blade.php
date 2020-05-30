<div class="sideMenu bg-primary">
    <div class="sidebar">

        <ul class="navbar-nav my-3 p-1 ">

            <li class="nav-item">
                <a href="#" class="nav-link px-1 btn-outline-secondary" id="eventsBtn">
                    <i class="far fa-calendar-plus text-white mx-2"></i>
                    <span class="text-white">{{__('messages.dashboard.sidebar.manage')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link px-1 btn-outline-secondary" id="participation-record-button">
                    <i class="far fa-calendar-check text-white mx-2"></i>
                    <span class="text-white">{{__('messages.dashboard.sidebar.record')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('events/create')}}" class="nav-link px-1 btn-outline-secondary">
                    <i class="fas fa-plus text-white mx-2"></i>
                    <span class="text-white">{{__('messages.dashboard.sidebar.create')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('/profile/'.$data['nickname'])}}" class="nav-link px-1 btn-outline-secondary">
                    <i class="fas fa-user text-white mx-2"></i>
                    <span class="text-white">{{__('messages.dashboard.sidebar.profile')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-1 btn-outline-secondary" id="profileBtn">
                    <i class="fas fa-user-edit text-white mx-2"></i>
                    <span class="text-white">{{__('messages.dashboard.sidebar.update')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('/events')}}" class="nav-link px-1 btn-outline-secondary">
                    <i class="fas fa-calendar-alt text-white mx-2"></i>
                    <span class="text-white">{{__('messages.dashboard.sidebar.events')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link px-2 btn-outline-danger my-2" id="logoutBtn"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-door-closed text-white mx-2"></i>
                    <span class="text-white">{{__('messages.dashboard.sidebar.logout')}}</span>
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>
            <li class="nav-item  fixed-bottom text-center">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img class="border border-primary rounded-lg" src="{{asset('images/brand-logo.png')}}"
                         alt="WeSports"
                         width="180" height="40">
                </a>
            </li>
        </ul>
    </div>
</div>
