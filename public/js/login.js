$(function () {

    $("#btn_login_submit").click(function () {

        var email = $("#email");
        var pass = $("#password");

        if(email.val() !== "" && pass.val() !== "")
        {
            $(this).addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light');//.attr('disabled', true);
        }


    });
});
