<?php
include_once('conector/BaseDatos.php');
include_once('Contacto.php');

$cont=new Contacto();

// $cont->setear('0','Fabiana','NN','15123212','FX@mail.com','Esto es un comentario de Fabiana');
// $resp=$cont->insertar();
// $cont->setIdContacto('3');
// $cont->setNombre('Julian');
// $cont->setEmpresa('Koko.sa');
// $cont->setTelefono('15498563');
// $cont->setMail('JK@mail.com');
// $cont->setComentario('Esto es un comentario de Julian');
$arr=$cont->listar(null);
// $resp=$cont->modificar();
// $resp=$cont->eliminar();

if ($arr) {
    echo "Wii \n". print_r($arr);
} else {
    echo "pucha";
}


