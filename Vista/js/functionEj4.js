$(document).ready(function () {
    var userVal = false;
    var passVal = false;
    var nomVal = false;
    var apeVal = false;

    $("#username").keyup(function () {

        var username = $(this).val().trim();
        if (username !== '') {
            $('#username').removeClass('is-invalid');
            $.ajax({
                url: '../../database/handler.php',
                type: 'POST',
                data: {username: username},
                success: function (response) {
                    console.log(response)

                    if (response == 1) {
                        $('#validacion').html(`<p class="text-danger">No disponible</p>`);
                        $('#username').removeClass('is-valid');
                        userVal = false;
                    } else {
                        $('#validacion').empty();
                        $('#username').removeClass('is-invalid').addClass('is-valid');
                        userVal = true;
                    }
                }
            });
        } else {
            $('#username').addClass('is-invalid').removeClass('is-valid');
            $('#validacion').empty();
            userVal = false;
        }
    });

    $('#password').on('change', function (e) {
        var password = $(this).val();
        if (password !== '') {
            $('#password').addClass('is-valid').removeClass('is-invalid');
            passVal = true;
        } else {
            $('#password').addClass('is-invalid').removeClass('is-valid');
            passVal = false;
        }
    })

    $('#nombre').on('change', function (e) {
        var nombre = $(this).val();
        if (nombre !== '' && isNaN(nombre)) {
            $('#nombre').addClass('is-valid').removeClass('is-invalid');
            nomVal = true;
        } else {
            $('#nombre').addClass('is-invalid').removeClass('is-valid');
            nomVal = false;
        }
    })

    $('#apellido').on('change', function (e) {
        var apellido = $(this).val();
        if (apellido !== '' && isNaN(apellido)) {
            $('#apellido').addClass('is-valid').removeClass('is-invalid');
            apeVal = true;
        } else {
            $('#apellido').addClass('is-invalid').removeClass('is-valid');
            apeVal = false;
        }
    })

    $("#formPersona").submit(function (event) {

        if (userVal && passVal && nomVal && apeVal) {

            var formData = {
                username: $("#username").val(),
                password: $("#password").val(),
                nombre: $("#nombre").val(),
                apellido: $("#apellido").val()
            };
            $.ajax({
                type: "POST", url: "actionUserRegister.php", data: formData, dataType: "json", encode: true,
            }).done(function (data) {
                //console.log(data)
                $('.card-body').empty();
                $('.card-body').html(`<div class="alert alert-success">Usuario registrado!</div><div><button id="reload" class="btn btn-primary" onclick="location.reload();">Volver</button></div>`)
            });
        } else {
            $('#info-message').html(`<div class="alert alert-danger">Algunos campos contienen errores o estan vacios</div>`)
        }
        event.preventDefault();
    });

});

