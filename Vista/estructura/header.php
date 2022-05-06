<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index/index.php"><img src="../img/sonreir.png" height="40"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ejercicios
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="../index/ej1.php">Ejercicio 1</a></li>
                                    <li><a class="dropdown-item" href="../index/ej2.php">Ejercicio 2</a></li>
                                    <li><a class="dropdown-item" href="../index/ej3.php">Ejercicio 3</a></li>
                                    <li><a class="dropdown-item" href="../index/ej3.2.php">Ejercicio 3.2</a></li>
                                    <li><a class="dropdown-item" href="../index/ej4.php">Ejercicio 4</a></li>
                                    <li><a class="dropdown-item" href="../index/ej5.php">Ejercicio 5</a></li>
                                    <li><a class="dropdown-item" href="../index/ej6.php">Ejercicio 6</a></li>
                                
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>