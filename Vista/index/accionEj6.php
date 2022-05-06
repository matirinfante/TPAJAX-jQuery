<?php
include_once('../../Modelo/Estado.php');
include_once('../../Control/AbmEstado.php');
include_once('../../utiles/funciones.php');

$data = data_submitted();
$abmE = new AbmEstado();

$arrList = $abmE->buscar(['condicion' => 'LIKE "' . $data['descripcion'].'%"']);
$html = " ";

foreach ($arrList as $item) {
    $html .= " <li> " . $item->getDescripcion() . "</li>";
}
 echo $html;