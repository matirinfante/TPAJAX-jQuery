<?php
$title = "Ej4";
include_once("../estructura/header.php");
?>

<!-- Content -->
<div class="container-fluid" id="containerEj4">
<div class="button mt-2">
        <button type="button" class="btn_consig btn btn-outline-warning" value="4"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="">Consigna</button> 
    </div>
    <div class="row m-0 p-0">
        <div class="col-* text-center p-0 m-0 ">
            <img src="../img/catplaydark.png" class="" style="width:13% ;">
        </div>
    </div>
    <h4 class="text-title text-center m-3 fw-bold'">Formulario de Usuario</h4>
    <div class="row align-items-center">
        <div class="col-md-6 offset-md-3">
            <div class="card rounded-2">
                <div class="card-body">
                    <div id="info-message"></div>
                    <form id="formPersona" name="formPersona" method="post" action="actionUserRegister.php" novalidate>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="username" name="username" placeholder="Nombre de usuario" required>
                            <label for="username">Nombre de usuario</label>
                            <div class="invalid-feedback">Ingrese nombre de usuario.</div>
                            <div class="valid-feedback">Disponible</div>
                            <div id="validacion"></div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" name="password" type="password" placeholder="password" required>
                            <label for="password">Contraseña</label>
                            <div class="invalid-feedback">Ingrese una contraseña válida.</div>
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required>
                            <label for="nombre">Nombre</label>
                            <div class="invalid-feedback">Ingrese un nombre válido</div>
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Apellido" required>
                            <label for="apellido">Apellido</label>
                            <div class="invalid-feedback">Ingrese un apellido válido</div>
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-floating mb-3">
                            <div id="entrada">
                                <input class="form-control" id="estado" name="estado" type="text" placeholder="Estado" required>
                                <!-- <label for="estado">Estado</label> -->
                            </div>
                            <div class="container " id="salida">
                            <ul id="list"></ul>
                        </div>

                        <div class="d-grid">
                            <button id="btnEnviar" class="btn btn-primary btn-lg" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="../js/functionEj4.js"></script>
<script src="../js/functionEj6.js"></script>
<script src="../js/functionConsignas.js"></script>
<?php include_once("../estructura/footer.php"); ?>