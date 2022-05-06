<?php
$title = "Ej6";
include_once("../estructura/header.php");
?>
<div class="container mt-4">
    <div class="container w-25" id="entrada">
        <label for="estado" class="col-3 col-form-label">Estado:</label>
        <input type="text" class="form-control" id="estado" name="estado" required>
    </div>
    <div class="container w-25 mt-3" id="salida">
        <ul id="list" ></ul>
    </div>

</div>
<script src="../js/functionEj6.js"></script>
<?php include_once("../estructura/footer.php"); ?>