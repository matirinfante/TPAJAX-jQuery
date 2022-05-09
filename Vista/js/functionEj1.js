$(document).ready(function () {

    $.getJSON("../../Modelo/lista_ropa.json", function (data) {
        let tag
        $.each(data, function (key, value) {
            tag += `<option id="${key}" class="material" value=${value.material}> ${value.material} </option>`
        })
        $('#material').append(tag)
    })

})

function cargarColores(material) {
    $.getJSON("../../Modelo/lista_ropa.json", function (data) {
        let tag
        colores = data[material].colores
        $.each(colores, function (key, value) {
            tag += `<option id="${value}" class="color" value=${value}> ${value} </option>`
        })
        $('#color').append(tag)
        $('#precio').empty()
        $('#precio').append(`${data[material].precio}`)
    })

}

$('#material').on('change', function (e) {
    var materialSelected = $('select option').filter(':selected').attr("id");
    $('#color').empty()
    $('#contColor').show();
    $('#contPrecio').show();
    cargarColores(materialSelected)
    if(materialSelected==null){
        $('#contColor').hide();
        $('#contPrecio').hide();
    }
})
