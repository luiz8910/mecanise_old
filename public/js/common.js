function swal(data)
{
    swal.fire({
        title: data.title,
        text: data.text,
        type: data.type,
        confirmButtonClass: data.confirmButtonClass
    })
}
