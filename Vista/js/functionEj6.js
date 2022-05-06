$(document).ready(function(){
    $('#entrada').on('keyup','input',function(){
        var word= $(this).val();
        $.ajax({
            method:'post',
            url:'../index/accionEj6.php',
            data:{'descripcion':word},
            success: function(data){
                $('#salida ul').html(data);
            },
            error:function(data){
                console.log(data);
            }
        });
    });
});