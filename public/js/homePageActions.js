$(document).ready(function () {


    console.log('cargado')

    let menu = $('#mainMenu');
    let homePageHeader = $('#homePageHeader');
    let homePageContent = $('#homePageContent');

    let scollStart = 0; //posicion inicial del scroll
    let bodyOffset = homePageContent.offset(); //posicion top y left homePagecontent


    menu.hide();

    if (homePageContent.length) {

        $(document).scroll(function () {
            scollStart = $(this).scrollTop();

            if (scollStart > 0) {
                homePageHeader.hide();

                menu.show();

            } else {
                homePageHeader.show();
                menu.hide();

            }

        });

    }


})
