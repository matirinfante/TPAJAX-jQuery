<?php
$title = "Ej4";
include_once('../../utiles/funciones.php');
include_once('../../Modelo/Contacto.php');
include_once('../../Control/AbmContacto.php');

$data = data_submitted();
$abmC = new AbmContacto();
$html='';
// verificar existencia
$cont=$abmC->buscar(['nombre'=>$data['valor']]);
if($cont != null){
    $html.= "Nombre invalido";
}else{
    $html.="Nombre valido";
    // dar alta
}


echo $html;
