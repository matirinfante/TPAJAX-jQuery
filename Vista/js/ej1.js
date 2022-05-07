$(document).ready(function () {

    $.getJSON("../../database/lista_ropa.json", function (data) {
        let tag
        $.each(data, function (key, value) {
            tag += `<option id="${key}" class="material" value=${value.material}> ${value.material} </option>`
        })
        $('#material').append(tag)
    })

})

function cargarColores(material) {
    $.getJSON("../../database/lista_ropa.json", function (data) {
        let tag
        colores = data[material].colores
        $.each(colores, function (key, value) {
            tag += `<option id="${value}" class="color" value=${value}> ${value} </option>`
        })
        $('#color').append(tag)
        $('#precio').empty()
        $('#precio').append(`${data[material].precio}`)
    })

    /*$.ajax({
        url: "../../../database/lista_ropa.json",
        type: 'GET',
        success: function otrometodo(response) {
            let tag
            colores = data[material].colores
            $.each(colores, function (key, value) {
                tag += `<option id="${value}" class="color" value=${value}> ${value} </option>`
            })
            $('#color').append(tag)
            $('#precio').empty()
            $('#precio').append(`<p>${data[material].precio}</p>`)
        }
    })*/
}

$('#material').on('change', function (e) {
    var materialSelected = $('select option').filter(':selected').attr("id");
    $('#color').empty()
    cargarColores(materialSelected)
})
