$(document).ready(function () {

    let registerPanel = $('#registerPanel');
    let loginPanel = $('#loginPanel');
    let loginBtn = $('#loginBtn');
    let registerBtn = $('#registerBtn');

    //Al cargar la pagina ocultar el panel de registro

    registerPanel.hide();


    registerBtn.click(function () {
        loginPanel.hide();
        registerPanel.show();
    })


    loginBtn.click(function () {
        registerPanel.hide();
        loginPanel.show();

    })

})
