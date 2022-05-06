<?php
include('conector/BaseDatos.php');
$arreglo = array();
$base = new BaseDatos();
$sql = "SELECT * FROM paises WHERE id=1";
// if ($parametro != "") {
//     $sql .= 'WHERE ' . $parametro;
// }
$res = $base->Ejecutar($sql);

if ($res > -1) {
    if ($res > 0) {
        while ($row = $base->Registro()) {
            print_r($row);
        }
    }
}

