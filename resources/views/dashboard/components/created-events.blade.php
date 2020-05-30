<div id="adminWelcome" class="my-3 pt-4 mx-1">
    @if(session('status'))
        <div id="alerts" class="alert alert-success text-center">
            {{session('status')}}
        </div>
    @endif
        @if(empty($userEvents))
            <h3>{{__('messages.dashboard.components.manage.empty')}}
                <a class="h3" style="text-decoration: none;" href="{{url('/events/create')}}">
                    {{__('messages.dashboard.components.manage.link')}}</a>
            </h3>
    @else
        <h3 class="form-title text-center">{{__('messages.dashboard.components.manage.head')}}</h3>
        @foreach($userEvents as $userEvent)
            <div class="row  justify-content-around border border-primary m-0 my-2 p-3  admin-event-card">
                <div class="col-7 col-md-5">
                    {{__('messages.dashboard.components.manage.title')}}
                    <strong>
                        {{$userEvent['title']}}
                    </strong>
                </div>
                <div class="col-5 col-md-4">
                    {{__('messages.dashboard.components.manage.participants')}}
                    <strong>
                        {{$userEvent['current_participants']}} / {{$userEvent['max_participants']}}
                    </strong>
                </div>

                <div class="col-12 col-md-3 m-0 p-0">
                    <div class="row justify-content-center">
                        <a href="{{url('/events/update?eid='.$userEvent['id'])}}"
                           class="mx-2 btn btn-outline-warning text-danger" id="editEvent">
                            <i class="far fa-edit"></i>
                        </a>
                        @include('dashboard.components.delete-modal')
                        <button class="mx-2 btn btn-outline-warning text-danger" data-toggle="modal"
                                data-target="#modalDelete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>


