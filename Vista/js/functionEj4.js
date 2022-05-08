$(document).ready(function(){
    $('#nombre').keyup(function(){
    // $('#nombre').on('change',function(){
        var value=$(this).val();
         console.log(value);
        $.ajax({
            url:'../index/accionEj4.php',
            method:'post',
            data:{valor:value},
            success:function(response){
                $('.validation').html(response);

                if(value==""){
                    $('.validation').empty();
                }
            }
        });
    });
});