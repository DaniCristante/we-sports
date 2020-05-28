$(document).ready(function () {

    let filterBtn = $('#filterBtn');

    filterBtn.hide();
    filterBtn.click(function () {
        window.location.href = "#filterForm";
    })

    $(window).scroll(function () {

        if ($(this).scrollTop() > 500) {

            filterBtn.show();
        } else {
            filterBtn.hide();
        }
    })

})
