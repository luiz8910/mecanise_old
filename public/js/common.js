$(function () {

    $('.next-tab').attr('disabled', null);

    $('.submit').attr('disabled', null);

    $(".number").keypress(function (e) {

        if(e.which < 48 || e.which > 57)
        {
            return false;
        }
    })
});

function swal(data)
{
    swal.fire({
        title: data.title,
        text: data.text,
        type: data.type,
        confirmButtonClass: data.confirmButtonClass
    })
}


function clean_fields($class)
{
    $("." + $class).val('');
}

