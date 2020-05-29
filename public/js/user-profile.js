$(document).ready(function () {



    let userContentField = $('#userContentField');
    let eventsParticipateBtn = $('#eventsParticipateBtn');
    let eventsBtn = $('#eventsBtn');
    let usersEventsParticipate = $('#usersEventsParticipate');

    eventsBtn.addClass('active');
    usersEventsParticipate.hide();


    eventsParticipateBtn.on('click', function () {
        eventsBtn.removeClass('active');
        eventsParticipateBtn.addClass('active');
        userContentField.children().hide();

        $('#usersEventsParticipate').show();

    });

    eventsBtn.on('click', function () {
        eventsParticipateBtn.removeClass('active');
        eventsBtn.addClass('active');
        userContentField.children().hide();
        $('#usersEvents').show();

    });


});
