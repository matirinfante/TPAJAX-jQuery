<?php
$title = "Ej2";
include_once("../estructura/header.php");
?>
<div class="button mt-2 ms-2">
        <button type="button" class="btn_consig btn btn-outline-warning" value="2"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="">Consigna</button> 
    </div>
    <div class="container">
        <div class="text-title display-6 m-2">Cosplay</div>
        <div class="container border border-2 rounded-3 mt-2 p-2">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active link-danger" id="anime-tab" data-bs-toggle="tab"
                            data-bs-target="#Anime"
                            type="button" role="tab" aria-controls="anime" aria-selected="true" value="0">Anime
                    </button>
                    <button class="nav-link link-danger" id="peliculas-tab" data-bs-toggle="tab"
                            data-bs-target="#Peliculas"
                            type="button" role="tab" aria-controls="peliculas" aria-selected="false" value="1">Peliculas
                    </button>
                    <button class="nav-link link-danger" id="series-tab" data-bs-toggle="tab" data-bs-target="#Series"
                            type="button" role="tab" aria-controls="series" aria-selected="false" value="2">Series
                    </button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="Anime" role="tabpanel" aria-labelledby="anime-tab">

                </div>
                <div class="tab-pane fade" id="Peliculas" role="tabpanel" aria-labelledby="peliculas-tab">

                </div>
                <div class="tab-pane fade" id="Series" role="tabpanel" aria-labelledby="series-tab">

                </div>
            </div>
        </div>

    </div>
    <script src="../js/functionEj2.js"></script>
    <script src="../js/functionConsignas.js"></script>
<?php include_once("../estructura/footer.php"); ?>