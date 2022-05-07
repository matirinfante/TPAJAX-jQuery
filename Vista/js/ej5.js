$(document).ready(function () {

    //Full carga de datos
    $.ajax({
        method: 'post',
        url: '../../Modelo/table_info.json',
        success: function (data) {
            $.each(data, function (key, value) {
                    $('#table-content').append(`<tr><td>${value.producto}</td><td>${value.talles}</td><td>${value.descripcion}</td><td>${value.precio}</td></tr>`)
                }
            )
        },
    });

    //Carga particionada
    $.ajax({
        method: 'post',
        url: '../../Modelo/table_info.json',
        success: function (data) {
            $.each(data, function (key, value) {
                    $('#table-content').append(`<tr><td>${value.producto}</td><td>${value.talles}</td><td>${value.descripcion}</td><td>${value.precio}</td></tr>`)
                }
            )
        },
    });
})