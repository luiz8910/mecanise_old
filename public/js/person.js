$(function () {

    $("#email-hidden").css('display', 'none');

    $(".tab-info").keyup(function () {
        $('.input-group').removeClass('border-red');

        $(".text-danger").css('display', 'none');

    }).change(function () {
        $(".text-danger").css('display', 'none');
    });

});

function delete_person(id)
{
    var request = $.ajax({
        url: '/person/' + id,
        method: 'DELETE',
        dataType: 'json'
    });

    var data = '';

    request.done(function (e) {
        if(e.status)
        {
            data = {
                title: 'Sucesso',
                text: 'O usuário foi excluído',
                type: 'success',
                confirmButtonClass: 'btn btn-secondary'
            };

            swal(data);
        }
        else{

            data = {
                title: 'Atenção',
                text: 'Um erro ocorreu, tente novamente mais tarde',
                type: 'danger',
                confirmButtonClass: 'btn btn-danger'
            };

            swal(data);
        }
    });

    request.fail(function (e) {
        console.log('fail');
        console.log(e);

        data = {
            title: 'Atenção',
            text: 'Um erro ocorreu, tente novamente mais tarde',
            type: 'danger',
            confirmButtonClass: 'btn btn-danger'
        };

        swal(data);
    })
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
            $("#user_edit_tab_"+$tab).trigger('click').removeClass('disabled');
        }
    }




}
