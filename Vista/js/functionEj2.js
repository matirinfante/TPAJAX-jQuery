function carga(idTab) {
    //Se recupera json
    $.getJSON('../../Modelo/datosEj2.json', function (data) {
        var html = "";
        var cards = data[idTab]['cards'];
        var nameTab = data[idTab]['tipo'];

        html += "<p class='text'>" + data[idTab]['texto'] + "<hr> </p> <div class='row text-center '>";

        $.each(cards, function (key, elem) {
            if (((key + 1) % 3) == 1) {
                html += "</div> <div class='row text-center '>";
            }
            html += " <div class='col-4'> ";
            html += "<div class='cont'> <h6 class='text'>" + elem['titulo'] + "</h6>" + "<img src='" + elem['img'] + "' class='img-fluid ' alt=''> </div> </div>";
        });
        html += "</div>";

        $('#' + nameTab).html(html);
    });
}

$(document).ready(function () {
    //carga inicial
    carga(0);

    //se escucha el click en los tabs
    $('.nav-link').on('click', function () {
        //recuperar el id del tab
        var idTab = $(this).val();
        carga(idTab);
    });
    
    // --------
    //recuperar el id del tab
    // $('.nav-link').on('click', function () {
    //     var idTab = $(this).val();

    //     //recuperar JSON
    //     $.getJSON('../../Control/datosEj2.json', function (data) {
    //         var html = "";
    //         var cards = data[idTab]['cards'];
    //         var nameTab = data[idTab]['tipo'];

    //         html+="<p class='text'>"+ data[idTab]['texto'] +"<hr> </p> <div class='row text-center '>";

    //         $.each(cards,function(key,elem){
    //             if (((key+1)%3)==1) {
    //                 html+="</div> <div class='row text-center '>";
    //             }
    //             html += " <div class='col'> <h6 class='text'>" + elem['titulo'] + "</h6>";
    //             html += "<img src='" + elem['img'] + "' class='img-fluid ' alt=''> </div>";
    //         });
    //         html+="</div>";

    //         $('#' + nameTab).html(html);
    //     });
    // });

});

