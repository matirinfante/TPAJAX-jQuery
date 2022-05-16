<?php
include_once('../../Modelo/Producto.php');
include_once('../../Control/AbmProducto.php');
include_once('../../utiles/funciones.php');

$data = data_submitted();
$abmP = new AbmProducto();
$html = "";
$total = $abmP->contarRegistros();

$arrProd = $abmP->buscar(['condicion' => 'limit ' . $data['limite'] . ',5']);

if (count($arrProd) > 0) {


    if ($data['limite'] > 0) {
        $limit = $data['limite'] - 5;
        $html .= "<div class=''><button id='anterior' class='btn btn-primary anterior fw-bold mb-3' onclick='cargarTabla(" . $limit . ")'> Anterior </button></div>";
    } else {
        $html .= "<span class='anterior'> </span>";
    }
    foreach ($arrProd as $elem) {
        $html .= "<tr> <td>" . $elem->getNombre() . "</td> <td>" . $elem->getTalle() . "</td> <td>" . $elem->getDescripcion() . "</td> <td>$" . $elem->getPrecio() . "</td> </tr> ";
    }
    if ($data['limite'] < $total - 5) {
        $limit = $data['limite'] + 5;
        $html .= "<div class='pt-2'><button id='siguiente' class='btn btn-primary siguiente fw-bold' onclick='cargarTabla(" . $limit . ")'> Siguiente </button></div>";
    } else {
        $html .= "<span class='siguiente'> </span>";
    }

    echo $html;
}
