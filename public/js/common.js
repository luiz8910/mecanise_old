$(function () {

    $('.next-tab').attr('disabled', null);

    $('.submit').attr('disabled', null);

    $(".number").keypress(function (e) {

        if(e.which < 48 || e.which > 57)
        {
            return false;
        }
    });

    $(".tab-info").keyup(function () {
        $('.input-group').removeClass('border-red');

        $(".text-danger").css('display', 'none');

    }).change(function () {
        $(".text-danger").css('display', 'none');
    });

});

function sweet_alert($data, $ajax)
{
    swal({
        title: $data.title,
        text: $data.text,
        icon: $data.icon,
        buttons: {
            cancel: {
                text: $data.cancel ? $data.cancel : "Cancelar",
                value: null,
                visible: true,
                closeModal: true,
            },
            confirm: {
                text: $data.button ? $data.button : "OK",
                value: true,
                visible: true,
                closeModal: true
            }
        }

    }).then((value) => {
        if(value)
        {
            //TODO configure $ajax here
            swal($data.success_msg, {
                icon: 'success',
                timer: 3000
            });
        }
    });


}


function clean_fields($class)
{
    $("." + $class).val('');
}

/*
 * $tab indicates the next tab which should show up
 * $class indicates which fields has to be filled up before going to the next tab
 *
 * $tab indica qual tab deve aparecer
 * $class verifica quais campos são obrigatórios
 */
function next_tab($tab, $class)
{
    var fields = $("." + $class);

    $(".input-group").removeClass('border-red');
    $(".select-input").removeClass('border-red');

    if(fields.length > 0)
    {
        var i = 0;
        var errors = 0;

        while (i < fields.length)
        {

            if(fields[i].value === '' && fields[i].getAttribute('required') !== null)
            {
                var id = fields[i].id;

                $("#input-"+id).addClass('border-red');
                $("#span_"+id+"_status").css('display', 'block');

                errors++;
            }

            i++;
        }

        if(errors === 0)
        {
            if($tab === 0)
            {
                $("#form").submit();
            }
            else{
                $("#user_edit_tab_"+$tab).trigger('click').removeClass('disabled');
            }

        }
    }
}
