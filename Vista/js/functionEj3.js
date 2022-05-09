$(document).ready(function () {
    $('.tab-content').on('click', '.nav-link', function () {
        var val = $(this).text();
        var imagen = $("#imagenPrincipal");
        var actualNavlink = $(this);
        var itemActual = actualNavlink.attr('id');

        $.getJSON('../../Modelo/datosEj3.json', function (data) {
            var html = "";
            var htmlTabla = "";
            var item = data[itemActual - 1];

            html += "<p class='text-decoration-underline fw-bold'>" + val + "</p>";
            html += `<p>${item['text']}</p>`;

            //Carga tabla
            datosTabla = item['table'];
            htmlTabla += `<!-- Tabla -->
                        <table class="table table-striped mt-2">
                            <tr>
                                <td class="table-info">Material:</td>
                                <td>${datosTabla.material}</td>
                            </tr>
                            <tr>
                                <td class="table-info">Talle:</td>
                                <td>${datosTabla.talle}</td>
                            </tr>
                            <tr>
                                <td class="table-info">Precio:
                                </td>
                                <td>${datosTabla.precio}</td>
                            </tr>
                        </table>`

            //Se cambia img
            src = item['src'];
            imagen.attr("src", src);

            $(".nav-link").removeClass("active");
            actualNavlink.addClass("active");
            $('#modal-principal').html(html);
            $('#modal-tabla').html(htmlTabla)
            $('#infModal').modal('show');
        }
        )
            ;
    });

    //Cerrar modal
    $('.close').on('click', function () {
        $('#infModal').modal('hide');
    });
});

