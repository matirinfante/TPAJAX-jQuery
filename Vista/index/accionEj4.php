<?php
$title = "Ej4";
include_once("../estructura/header.php");
include_once('../../utiles/funciones.php');
include_once('../../Modelo/Contacto.php');
include_once('../../Control/AbmContacto.php');

$data = data_submitted();
$abmC = new AbmContacto();
?>
<div class="container">
    <?php
    if ($abmC->alta($data)) {
        echo "<h3>Los datos fueron cargados exitosamente.</h3>";
    } else {
        echo "<h3>Los datos no pudieron ser cargados, verifique lo ingresado e intente nuevamente.</h3>";
    }
    ?>


</div>
<?php include_once("../estructura/footer.php"); ?>