$(document).ready(function () {

    $("#username").keyup(function () {

        var username = $(this).val().trim();

        if (username !== '') {

            $.ajax({
                url: '../database/handler.php',
                type: 'POST',
                data: {username: username},
                success: function (response) {
                    if (!response) {
                        $('#validacion').html(`<p class="text-danger">No disponible</p>`);
                    }
                }
            });
        }
    });
});
