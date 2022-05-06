$(document).ready(function () {
    $('.tab-content').on('click', '.nav-link', function () {
        var val = $(this).text();

        // $.ajax({
        //     url:'../index/accionEj3.php',
        //     type:'post',
        //     data:{name:val},
        //     success: function(response){
        //         $('modal-body').html(response);

        //         $('#infModal').modal('show');
        //     }
        // });

        $.getJSON('../../Modelo/datosEj3.json', function (data) {
            var i = 0;
            var exist = false;
            var html = "";
    
            while (!exist && i < data.length) {
                if (data[i]['name'] == val) {
                    html += "<p class='text-decoration-underline'>" + val + "</p>";
                    html += data[i]['text'];
                    exist = true;
                }
                i++;
            }
            $('.modal-body').html(html);
            $('#infModal').modal('show');
        });
    });

    //Cerrar modal
    $('.close').on('click',function(){
        $('#infModal').modal('hide');
    });
});

