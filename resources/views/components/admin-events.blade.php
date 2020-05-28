<div id="adminWelcome" class="my-3 pt-4 mx-1">
    @if(session('event-status'))
        <div id="alerts" class="alert alert-success text-center">
            {{session('event-status')}}
        </div>
    @endif
    <h3 class="form-title">Mis eventos</h3>
    @foreach($userEvents as $userEvent)
        <div class="row  justify-content-around border border-primary m-0 my-2 p-3  admin-event-card">
            <div class="col-7 col-md-5">
                Titulo:
                <strong>
                    {{$userEvent['title']}}
                </strong>
            </div>
            <div class="col-5 col-md-4">
                Participantes:
                <strong>
                    {{$userEvent['current_participants']}} de {{$userEvent['max_participants']}}
                </strong>
            </div>

            <div class="col-12 col-md-3 m-0 p-0">
                <div class="row justify-content-center">
                    <a href="{{'/events/update?eid='.$userEvent['id']}}" class="mx-2 btn btn-outline-warning text-danger" id="editEvent">
                        <i class="far fa-edit"></i>
                    </a>
                    @include('components.delete-modal')
                    <button class="mx-2 btn btn-outline-warning text-danger" data-toggle="modal" data-target="#modalDelete">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
