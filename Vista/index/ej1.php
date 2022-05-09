<?php
$title = "Ej1";
include_once("../estructura/header.php");
?>
<div class="container-fluid" id="containerEj1">
    <div class="button mt-2">
        <button type="button" class="btn_consig btn btn-outline-warning" value="1"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="">Consigna</button> 
    </div>

    <div class="position-relative overflow-hidden p-3 ms-5 me-5">
        <div class="row ">
            <div class="col-* text-center p-3 ">
                <img src="../img/catplaydark.png" class="" style="width:15% ;">
            </div>
        </div>
        <h4 class="text-title text-center m-3">Selección de materiales</h4>

        <div class="row align-items-center">
            <div class="col-md-6 offset-md-3">
                <div class="form-group ">
                    <label>Material</label>
                    <select name="material" id="material" class="form-control input-md mt-2">
                        <option value="">Seleccioná material</option>
                    </select>
                    <br />
                </div>
                <div class="form-group" id="contColor">
                    <label>Color</label>
                    <select name="color" id="color" class="form-control input-md">
                        <option value="">Seleccioná color</option>
                    </select>
                </div>
                <div class="alert alert-info mt-4" id="contPrecio">
                    <h4>Precio: <span id="precio"></span></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../js/functionEj1.js"></script>
<script src="../js/functionConsignas.js"></script>
<?php include_once("../estructura/footer.php"); ?>