$(function () {

    $(".car_id").change(function () {

        const id = $(this).val();


        if(id)
        {
            var request = $.ajax({
                url: '/car_details/' + id,
                method: 'GET',
                dataType: 'json'
            });

            request.done(function (e) {

                if(e.status)
                {

                    $("#brand").val(e.car.brand);

                    $("#version").val(e.car.version);

                    var append = '';

                    var diff = e.car.end_year - e.car.start_year;

                    if(diff > 0)
                    {
                        for(var i = 0; i < diff + 1; i++)
                        {
                            var year = parseInt(e.car.start_year) + i;

                            append += '<option value="'+year+'">'+year+'</option>';
                        }

                        $("#year option").remove();

                        $("#year").append(append);
                    }
                }
                else{
                    sweet_alert_error(e.msg);
                }
            });

            request.fail(function (e) {

                console.log('fail');
                console.log(e);
            });
        }
    })
});
