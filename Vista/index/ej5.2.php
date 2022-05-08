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

<!-- NECESITA BD -->
<!-- CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `talle` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `precio` DECIMAL(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);
  
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('Autumn Miau','M','Conjunto de boina y saco/capa',2350);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('Super Miau','S','Conjunto de remera y capa',1700);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('CalabaMichi','M','Disfraz enterizo',1950);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('PrrNfluencer','S','Juego de anteojos y collar',1500);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('NekoDeku','L','Cosplay completo con enterizo, accesorios y peluca',3200);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('Capitán Milaneso','M','Sombrero',2000);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('BotiCat','S','Botitas de lana',870);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('ACatSuki','M','Capa tela de buzo',1970);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('La flotación','M','Conjuntito completo, enterizo, accesorios y peluca',3100);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('Hamburgueso','S','Remera algodón',1000);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('CatOru Gojo','L','Enterito y peluca',1750);
INSERT INTO `producto`( `nombre`, `talle`, `descripcion`, `precio`) VALUES ('Miaurry Christmas','M','Capa con capucha',1600); -->