<?php
$title = "Ej4";
include_once("../estructura/header.php");
?>

<div class="display-6 m-2 text-center">Contacto</div>

<!-- Content -->
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
        <div id="info-message"></div>
            <form id="formPersona" name="formPersona" method="post" action="actionUserRegister.php" novalidate>
                <div class="form-floating mb-3">
                    <input class="form-control" id="username" name="username"
                           placeholder="Nombre de usuario" required>
                    <label for="username">Nombre de usuario</label>
                    <div class="invalid-feedback">Ingrese nombre de usuario.</div>
                    <div class="valid-feedback">Disponible</div>
                    <div id="validacion"></div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" name="password" type="text" placeholder="password"
                           required>
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
                    <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Apellido"
                           required>
                    <label for="apellido">Apellido</label>
                    <div class="invalid-feedback">Ingrese un apellido válido</div>
                    <div class="valid-feedback"></div>
                </div>
                <div class="d-grid">
                    <button id="btnEnviar" class="btn btn-primary btn-lg" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="../js/ej4.js"></script>

<?php include_once("../estructura/footer.php"); ?>
