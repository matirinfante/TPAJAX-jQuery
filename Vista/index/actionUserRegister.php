<?php
$title = "Ej4";
include_once('../../utiles/funciones.php');
include_once('../../Modelo/Usuario.php');
include_once('../../Control/AbmUsuario.php');

$data = data_submitted();
$abmC = new AbmUsuario();
$response = 201;
$data['password']=md5($data['password']);
if ($abmC->alta($data)) {
    $response = 200;
}

echo json_encode($response);



