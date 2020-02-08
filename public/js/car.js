$(function () {

    $("#model").change(function () {
        var spinner = $("#spinner_model");
        var model = $("#model");
        var span_valid = $("#span-valid-model");
        var span_invalid = $("#span-invalid-model");

        model.removeClass('is-valid is-invalid');
        span_invalid.css('display', 'none');
        span_valid.css('display', 'none');

        if(model.val() !== "")
        {
            spinner.addClass("kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input");

            var request = $.ajax({
                url: '/car_exists/' + model.val(),
                method: 'GET',
                dataType: 'json'
            });

            request.done(function (e) {
                if(e.status)
                {
                    model.addClass('is-valid');
                    spinner.removeClass("kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input");
                    span_valid.css('display', 'block');
                }
                else{
                    model.addClass('is-invalid');
                    spinner.removeClass("kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input");
                    span_invalid.css('display', 'block').text(e.msg);
                }

            });

            request.fail(function (e) {
                console.log('fail');
                console.log(e);

                spinner.removeClass("kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input");
                span_invalid.css('display', 'block').text('Um erro ocorreu, tente novamente mais tarde');
            })
        }

    });
});
