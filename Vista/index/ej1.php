<?php 
$title="Ej1";
include_once("../estructura/header.php");
?>
<div class="container">
    <h1 align="center">Ejercicio 1 - jQuery</h1>
    <br/>
    <p class="text-justify">Usando AJAX, implementá un par de selects relacionados dependientes.
        El contenido de los select debe estar relacionado a tu página, por ejemplo, si tu sitio fue de
        películas el contenido de los select puede ser Títulos de películas y actores. Similar si es
        música. Si es de recetas puede ser Receta e Ingredientes.
        Para comenzar a probar buscá en la web ejemplos de países y Estados o provincias.
        El funcionamiento debe ser que al seleccionar algún elemento del primer select se deberá
        habilitar el segundo select listando exclusivamente el contenido asociado a la primera
        selección.</p>
    <br/>
    <div class="form-group ">
        <label>Material</label>
        <select name="material" id="material" class="form-control input-md">
            <option value="">Seleccioná material</option>
        </select>
        <br/>
    </div>
    <div class="form-group ">
        <label>Color</label>
        <select name="color" id="color" class="form-control input-md">
            <option value="">Seleccioná color</option>
        </select>
    </div>
    <div class="alert alert-info">
        <h4>Precio: <span id="precio"></span></h4>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../js/ej1.js"></script>
<?php include_once("../estructura/footer.php"); ?>
