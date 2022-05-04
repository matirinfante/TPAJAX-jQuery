$(document).ready(function () {
    $.getJSON("../../../database/tabs_data.json", function (data) {
        let tabData = ''
        $.each(data, function (key, value) {
            if (key === 0) {
                tabData += `<div class="tab-pane fade show active" id="${value.nombre}" role="tabpanel" aria-labelledby="${value.nombre}-tab">`
            } else {
                tabData += `<div class="tab-pane fade" id="${value.nombre}" role="tabpanel" aria-labelledby="${value.nombre}-tab">`
            }
            tabData += `<p class="text">${value.textoContenido}<hr></p>`
            tabData += `<div class="row text-center p-1">`
            $.each(value.cards, function (key, value) {
                tabData += `<div class="col-4"><h6 class="text">${value.titulo}</h6><img src="${value.src}" class="img-fluid" alt=""></div>`
            })
            tabData += `</div></div>`
        })
        $('#nav-tabContent').html(tabData);
    })
})
