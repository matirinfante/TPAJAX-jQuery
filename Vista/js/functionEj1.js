$(document).ready(function () {
    // escuchar si existe cambio en el select
    $('#provincia').on('change', function () {
        // recupero el valor del option seleccionado
        var selected = $(this).val();
        // recupero el json
        $.getJSON('../../Modelo/datos.json', function (data) {
            var ciudad = $("#ciudad");
            
            if (selected == -1) { // si no se selecciono provincia
                ciudad.empty();
                ciudad.append("<option>" + 'Seleccione provincia' + "</option>");
            } else { 
                ciudad.empty();
                var province=data[selected];
                $.each(province.ciudades, function (key, element) {
                    ciudad.append("<option>" + element + "</option>");
                });
            }
        });
    });
    $('#provincia').trigger('change');
});
