$(document).ready(function(){
    cargarTabla(0);
});

function cargarTabla(limite){
    $.ajax({
        url:'../index/accionEj5.php',
        method:'post',
        data:{limite:limite},
        success:function(response){
            $('#table-content').html(response);
        }
    });
}