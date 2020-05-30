$(document).ready(function () {

    //Add toggler button, removing footer and header of main templete
    addTogglerButton();

    //Change size of admin sidemenu
    $('.sideMenuToggler').on('click', function () {
        $('.wrapper').toggleClass('active');

    });

    $('#adminWrapper').click(function () {
        $(this).removeClass('active');
    })

    let adminWelcome = $('#adminWelcome');
    let userUpdateForm = $('#userUpdateForm');
    let participationRecord = $('#participation-record');

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

    $('#participation-record-button').on('click', function () {
        ocultContent();
        participationRecord.show();
    })

    function ocultContent() {
        $('#adminContent').children().hide();

    }


    function eventUpdateForm(e) {
        e.preventDefault();
        console.log('loged')
    }

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


