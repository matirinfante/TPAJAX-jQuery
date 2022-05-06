<?php 
$title="Ej1";
include_once("../estructura/header.php");
?>
<div class="container">
<h1 class="title pt-4">Prueba Select dependiente AJAX</h1>
  <h4 class="title pt-4">Provincia</h4>
  <select id="provincia" name="provincia">
    <option value="-1" selected>Seleccionar....</option>
    <option value="0">Neuquen</option>
    <option value="1">Rio Negro</option>
    <option value="2">Chubut</option>
  </select>

  <h4>Ciudad</h4>
  <select id="ciudad" name="ciudad">
    <option value="">Seleccione Provincia</option>
  </select>


</div>
<script src="../js/functionEj1.js"></script>
<?php include_once("../estructura/footer.php"); ?>