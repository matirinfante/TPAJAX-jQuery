$(document).ready(function () {

    function cargaJSON(id, padre) {
        var html = '';
        //Se obtiene el json
        $.getJSON("../../../database/lista_ropa.json", function (data) {
            //Valor por defecto
            html += '<option value="">Seleccione ' + id + '</option>';

            //Por cada elemento en el json
            $.each(data, function (key, value) {
                //Si es #talle entonces carga solo los elementos talle con padre = 0
                if (id == 'talle') {
                    if (value.padre == '0') {
                        html += '<option value="' + value.id + '">' + value.nombre + '</option>';
                    }
                } else {
                    //Si es #precio entonces carga solo los elementos que tienen padre = id padre
                    if (value.padre == padre) {
                        html += '<option value="' + value.id + '">' + value.nombre + '</option>';
                    }
                }
            });
            $('#' + id).html(html);
        });

    }

    //Primera carga para select #talle
    cargaJSON('talle');


    //Al seleccionar, cargar precios
    $(document).on('change', '#talle', function () {
        //Obtiene el id de la talle para buscar a sus hijos
        var id_talle = $(this).val();
        if (id_talle != '') {
            cargaJSON('precio', id_talle);
        } else {
            //Default si no hay datos
            $('#precio').html('<option value="">$..</option>');
        }
    });
});
