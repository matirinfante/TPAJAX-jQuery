$(document).ready(function(){
    $('.btn_consig').mouseenter(function(){
        var inciso=$(this).val();
        var btnConsigna=$(this);
        $.getJSON('../../Modelo/consignas.json',function(data){
            btnConsigna.attr('title',data[inciso-1]['consigna']);
        });
    });
});
