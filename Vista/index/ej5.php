<?php
$title = "Ej5";
include_once("../estructura/header.php");
?>
    <div class="container mt-3">
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
            <div class="col-md-12 text-center d-inline">
                <a class="btn btn-outline-primary">ATRAS</a>
                <a class="btn btn-outline-primary">ADELANTE</a>
            </div>
        </div>
    </div>
    <script src="../js/pagination.js"></script>
    <script src="../js/ej5.js"></script>
<?php include_once("../estructura/footer.php"); ?>