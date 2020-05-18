let eventsField = document.getElementById('eventsField');
const API_URL = 'http://52.91.0.226:8000/api';


console.log('funciona')

eventsField.addEventListener('load', showEvents());


function showEvents() {
    fetch(API_URL + '/events')
        .then((response) => response.json())
        .then((data) => {

            console.log(data);

            let templete = '';
            data.forEach(event => {

                templete += `

    <div class="col-12 col-xs-9  col-md-5 m-1">
        <div class="card p-2">
            <div class="row p-1 justify-content-around">
                <div class="col-12 col-xs-3 col-lg-4 text-center">
                    <img class="border rounded-lg bg-info" src="../images/favicon.png" alt=" ${event.title} "
                         width="145"/>

                </div>
                <div class="col-12 col-xs-8 col-lg-7 ">
                    <div class="card-title"><h4>Titulo del evento</h4>
                        <span class="fas fa-id-card"> by Nombre Autor</span>
                    </div>
                    <span class="fas fa-users"> ${event.current_participants} of ${event.max_participants} (progress bar) </span>
                    <span class="fas fa-users"> ${event.datetime} (calendario js plugin) </span>

                </div>
            </div>

            <div class="card-body col-12">

                <p class="text-black-50">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi, aperiam aut consequuntur deserunt dicta et harum libero
                    magnam maxime minima mollitia natus necessitatibus officiis optio porro quaerat.</p

                <hr class="bg-primary">

            </div>

            <div class="card-footer">
                <a href="" class="float-left btn btn-info">Ver evento</a>
                <a href="" class="float-right btn btn-success">Participar</a>
                 <a class="btn btn-outline-secondary p-2 p-md-3 text-center" href="/events/1">Ver mas
                eventos</a>

            </div>

        </div>

    </div>`;
            });


            eventsField.innerHTML = templete;
        });


}

