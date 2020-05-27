$(document).ready(function () {

    //Add toggler button, removing footer and header of main templete
    addTogglerButton();

    //Change size of admin sidemenu
    $('.sideMenuToggler').on('click', function () {
        $('.wrapper').toggleClass('active');

    });

    let adminWelcome = $('#adminWelcome');
    let userUpdateForm = $('#userUpdateForm');

    let editBtn = $('#editEvent');


    /***
     * Operaciones iniciales
     * */

    ocultContent();
    adminWelcome.show();


    $('#profileBtn').on('click', function () {
        ocultContent();
        userUpdateForm.show();
    });

    $('#eventsBtn').on('click', function () {

        ocultContent();
        adminWelcome.show();

    })


    function ocultContent() {
        $('#adminContent').children().hide();

    }


    function eventUpdateForm(e) {
        e.preventDefault();
        console.log('loged')
    }


    /***
     * Form validation only JavaScript
     */

    updateUserFormValidate();

})
;


/***
 * Function for add toggler button  to the main nav manu
 */
function addTogglerButton() {

    $('#mainMenu').remove();
    $('footer').remove();
    $('#createEventButton').remove()
}

function updateUserFormValidate() {


    let submitbBtn = $('#userUpdateForm form  input[type="submit"]');


    submitbBtn.prop('disabled', true);


    //Image 2mb validation
    $('#uimg').change(function () {
        if (this.files[0].size > 2097152) {
            $('#imgInput').append(' <small class="alert-danger text-center">Imagen debe ser inferior a 2MB</small>');

        }else{

            $('#imgInput').append('<small class="alert-success text-center  border rounded-lg w-100"> <i class="fas fa-check-circle mr-4"></i>El campo es valido</small> ');


        }
    })

    $('#uname').change(function () {
            if ($(this).val().length >= 74) {
                //Condicion para que no esciba varias veces el mensaje de error
                if (!$('#nameInput').children('small').length > 0) {
                    $('#nameInput').append('<small class="alert-danger text-center">Nombre puede tener un máximo de 74 caracteres</small>');
                }

            }else{

            $('#nameInput').append('<small class="alert-success text-center  border rounded-lg w-100"> <i class="fas fa-check-circle mr-4"></i>El campo es valido</small> ');


        }
        }
    );

    $('#surnames').change(function () {
            if ($(this).val().length >= 150) {
                //Condicion para que no esciba varias veces el mensaje de error
                if (!$('#inputSurnames').children('small').length > 0) {
                    $('#inputSurnames').append('<small class="alert-danger text-center">Apellidos puede tener un máximo de 150 caracteres</small>');
                }
            }{

            $('#inputSurnames').append('<small class="alert-success text-center  border rounded-lg w-100"> <i class="fas fa-check-circle mr-4"></i>El campo es valido</small> ');


        }
        }
    );

    $('#city').change(function () {
            if ($(this).val().length >= 100) {
                //Condicion para que no esciba varias veces el mensaje de error
                if (!$('#cityInput').children('small').length > 0) {
                    $('#cityInput').append('<small class="alert-danger text-center">Ciudad puede tener un máximo de 100 caracteres</small>');
                }

            }else {

                $('#cityInput').append('<small class="alert-success text-center  border rounded-lg w-100"> <i class="fas fa-check-circle mr-4"></i>El campo es valido</small> ');


            }
        }
    );


    $('#address').change(function () {
            if ($(this).val().length >= 200) {
                //Condicion para que no esciba varias veces el mensaje de error
                if (!$('#addressInput').children('small').length > 0) {
                    $('#addressInput').append('<small class="alert-danger text-center">Dirección puede tener un máximo de 200 caracteres</small>');
                }
            }
        }
    );

    $('#phone').change(function () {


            let spanishNumber = /^[679]{1}[0-9]{8}$/;

            let userPhoneEntry = $('#phone').val();


            if (userPhoneEntry.length < 9 || userPhoneEntry.length > 9) {
                //Condicion para que no esciba varias veces el mensaje de error
                if (!$('#phoneInput').children('small').length > 0) {
                    $('#phoneInput').append('<small class="alert-danger text-center">Número de telefono invalido [ XXX XXX XXX ]  </small>');
                }

            }
        }
    );


    $('#userUpdateForm form').change(function () {
        submitbBtn.prop('disabled', false);

    })

}








