<?php
include_once('../Modelo/conector/BaseDatos.php');
include_once('AbmContacto.php');
include_once('../Modelo/Contacto.php');
include_once('AbmEstado.php');
include_once('../Modelo/Estado.php');

$abmC=new AbmContacto();
$abmE=new AbmEstado();

// $resp=$abmC->alta(['nombre'=>'Facundo','empresa'=>'Globo','telefono'=>'15457845','mail'=>'GG@mail.com','comentario'=>'Esto es un comentario de Gian']);
// $resp=$abmC->baja(['idContacto'=>7]);
// $obj=$abmC->cargarObjeto(['idContacto'=>5,'nombre'=>'Gian','empresa'=>'Globo','telefono'=>'15457845','mail'=>'GG@mail.com','comentario'=>'Esto puede ser un comentario de Gian']);

// $resp=$abmC->modificacion(['idContacto'=>5,'nombre'=>'Gian','empresa'=>'Globo','telefono'=>'15457845','mail'=>'GG@mail.com','comentario'=>'Esto puede ser un comentario de Gian']);

$arr=$abmE->buscar(['condicion'=>'LIKE "a%" ']);
if($arr!=null){
    echo "Wiii". print_r($arr);
}else{
    echo "Pucha";
}