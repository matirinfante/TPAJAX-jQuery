$(document).ready(function () {

    $("#username").keyup(function () {

        var username = $(this).val().trim();
        if (username !== '') {
            $.ajax({
                url: '../../database/handler.php',
                type: 'POST',
                data: {username: username},
                success: function (response) {
                    console.log(response)

                    if (response == 1) {
                        $('#validacion').html(`<p class="text-danger">No disponible</p>`);
                    } else {
                        $('#validacion').html(`<p class="text-success">Disponible</p>`);

                    }
                }
            });
        }
    });

    $('#formPersona').on('submit', function (e) {
        e.preventDefault();
        //TODO: validar todo el form
        var username = $('#username').val();
        console.log(username)
    })

});

