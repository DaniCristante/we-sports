$(document).ready(function () {

    //Add toggler button, removing footer and header of main templete
    addTogglerButton();

    //Change size of admin sidemenu
    $('.sideMenuToggler').on('click', function () {
        $('.wrapper').toggleClass('active');

    });

    let adminContentField = $('#adminWelcome');
    let userUpdateForm = $('#userUpdateForm');


    /***
     * Operaciones iniciales
     * */

    userUpdateForm.hide();

    $('#profileBtn').on('click', function () {
        showUserUpdateForm();
    });


    function showUserUpdateForm() {

        adminContentField.hide();
        userUpdateForm.show();

    }


});


/***
 * Function for add toggler button  to the main nav manu
 */
function addTogglerButton() {

    $('#mainMenu').remove();
    $('footer').remove();
    $('#createEventButton').remove()
}






