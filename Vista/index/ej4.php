<?php
$title = "Ej4";
include_once("../estructura/header.php");
?>
<div class="container-fluid" id="formEj4">
    <div class="row">
        <div class="col-* text-center p-3 ">
            <img src="../img/catplaydark.png" class="" >
        </div>
    </div>
    <h4 class="text-center m-3" >Formulario</h4>

    <div class="d-flex justify-content-center ">
        <form id="the-form" name="the-form" method="POST" action="accionEj4.php" >
            <div class="form-group row mt-2">
                <label for="nombre" class="col-3 col-form-label">Nombre:</label>
                <div class="col-9">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <div class="validation"></div>
                </div>
                
            </div>
            <div class="form-group row mt-2">
                <label for="empresa" class="col-3 col-form-label">Empresa:</label>
                <div class="col-9">
                    <input type="text" class="form-control" id="empresa" name="empresa" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="telefono" class="col-3 col-form-label">Teléfono:</label>
                <div class="col-9">
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="email" class="col-3 col-form-label">Email:</label>
                <div class="col-9">
                    <input type="text" class="form-control" id="mail" name="mail" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="comentario" class="col-3 col-form-label">Comentario:</label>
                <div class="col-9">
                    <textarea id="comentario" name="comentario" class="form-control" required></textarea>
                </div>
            </div>
            <div class="form-group row mt-4 d-grid gap-2">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Borrar</button>
            </div>
        </form>

    </div>


</div>
<script src="../js/functionEj4.js"></script>
<?php include_once("../estructura/footer.php"); ?>