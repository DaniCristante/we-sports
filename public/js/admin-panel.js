$(document).ready(function () {

    addTogglerButton();

    $('.sideMenuToggler').on('click', function () {
        $('.wrapper').toggleClass('active');

    });


});


/***
 * Function for add toggler button  to the main nav manu
 */
function addTogglerButton() {


    $('#mainMenu').remove();
}
