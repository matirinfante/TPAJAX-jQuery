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

    /*$('#btnEnviar').on("click", function (e) {
        //TODO: validar todo el form
        var username = $('#username').val();
        var password = $('#password').val();
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        //$('formPersona').preventDefault();
        $.ajax({
            url: 'actionUserRegister.php',
            method: 'post',
            data: {
                username: username,
                password: password,
                nombre: nombre,
                apellido: apellido
            },
            success: function (response) {
                alert(response)
                //$('#formPersona').clear();
                //append alert success
            }
        })

    })*/
    $("#formPersona").submit(function (event) {
        var formData = {
            username: $("#username").val(),
            password: $("#password").val(),
            nombre: $("#nombre").val(),
            apellido: $("#apellido").val()
        };
        $.ajax({
            type: "POST",
            url: "actionUserRegister.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(formData);
        });

        event.preventDefault();
    });

});

