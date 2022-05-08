<?php
$title = "Ej5";
include_once("../estructura/header.php");
?>
<div class="container">

    <h4>Paginado</h4>
    <hr> <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover border-warning">
            <thead>
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Talles disponibles</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody id="table-content">

            </tbody>
        </table>
    </div>

</div>
<script src="../js/functionEj5.js"></script>
<?php include_once("../estructura/footer.php"); ?>

