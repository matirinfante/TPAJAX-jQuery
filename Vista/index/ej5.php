<?php
$title = "Ej5";
include_once("../estructura/header.php");
?>

<div class="container-fluid" id="containerEj5">
<div class="button mt-2">
        <button type="button" class="btn_consig btn btn-outline-warning" value="5"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="">Consigna</button> 
    </div>
    <div class="row ">
        <div class="col-* text-center p-0 m-0">
            <img src="../img/catplaydark.png" class="" style="width:15% ;">
        </div>
    </div>
    <h4 class="text-title text-center mt-3 mb-4">Paginado de Productos</h4>
    <div class="row align-items-center">
        <div class="col-md-8 offset-md-2">
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
    </div>


</div>
<script src="../js/functionEj5.js"></script>
<script src="../js/functionConsignas.js"></script>
<?php include_once("../estructura/footer.php"); ?>