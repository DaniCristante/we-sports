<div id="adminWelcome" class="my-3 pt-4 mx-1">
    @foreach($userEvents as $userEvent)
    <div class="row  justify-content-around border m-0 p-3  admin-event-card">

            <div class="col-5 col-md-4">
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

            <div class="col-12 col-md-3 m-0 p-0 ">
                <div class="row justify-content-center">
                    <button href="" class="mx-2 btn btn-outline-warning text-danger" id="editEvent"
                            onclick="eventUpdateForm()">
                        <i class="far fa-edit"></i>
                    </button>

                    <a href="" class="mx-2 btn btn-outline-warning text-danger">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </div>
            </div>
         </div>
    @endforeach
</div>

<script !src="">

    function eventUpdateForm(e) {


    }
</script>
