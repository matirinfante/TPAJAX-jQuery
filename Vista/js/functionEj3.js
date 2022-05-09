$(document).ready(function () {
    $('.tab-content').on('click', '.nav-link', function () {
        var val = $(this).text();
        var imagen = $("#imagenPrincipal");
        var actualNavlink = $(this);


        $.getJSON('../../Modelo/datosEj3.json', function (data) {
                var i = 0;
                var exist = false;
                var html = "";
                var htmlTabla = "";
                while (!exist && i < data.length) {
                    if (data[i]['name'] == val) {
                        html += "<p class='text-decoration-underline fw-bold'>" + val + "</p>";
                        html += `<p>${data[i]['text']}</p>`;
                        exist = true;

                        //Carga tabla
                        datosTabla = data[i]['table'];
                        console.log(datosTabla)
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
                        src = data[i]['src'];
                        imagen.attr("src", src);
                    }
                    i++;
                }
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

