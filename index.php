<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
    <title>Galeria</title>
</head>
<body class="bg-dark">
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                Practica
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="menu" aria-labelledby="menuEtiqueta">
                    <div class="offcanvas-header">
                        <h4 class="offcanvas-title" id="menuEtiqueta">Menú</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#welcome">Welcome</a>
                            </li>
                            <li class="nav-item">
                                
                                <a class="nav-link" onclick="mostrar(1)" href="#galeria1">Galery 1</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#galeria2">Galery 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container p-0 ">
        <div id="galeria" class="carousel slide mb-4" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#galeria" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#galeria" data-bs-slide-to="1" ></button>
                <button type="button" data-bs-target="#galeria" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#galeria" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#galeria" data-bs-slide-to="4"></button>
            </div>

            <div class="carousel-inner">
                <?php
                    for ($i = 0; $i < 5; $i++){
                        if($i == 0){
                ?>
                            <div class="carousel-item active">
                <?php
                        }else{
                ?>
                             <div class="carousel-item">
                <?php
                        }
                ?>
                        <img src="imgs/img<?php echo$i?>.jpg" class="d-block" alt="NOSEVEWE">
                    </div>
                <?php
                    }
                ?>
            </div>
            <!--
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgs/img1.jpg" class="d-block" alt="NOSEVEWE">
                </div>
                <div class="carousel-item">
                    <img src="imgs/img2.jpg" class="d-block" alt="NOSEVEWE">
                </div>
                <div class="carousel-item">
                    <img src="imgs/img3.jpg" class="d-block" alt="NOSEVEWE">
                </div>
                <div class="carousel-item">
                    <img src="imgs/img4.jpg" class="d-block" alt="NOSEVEWE">
                </div>
                <div class="carousel-item">
                    <img src="imgs/img5.jpg" class="d-block" alt="NOSEVEWE">
                </div>
            </div>
            -->
            <button class="carousel-control-prev" type="button" data-bs-target="#galeria" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galeria" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="container" id="welcome">
        <div class="card mb-4">
            <div class="card-header">
                WELCOME
            </div>
            <div class="card-body text-center">
                    <h4 class="card-title">TITULO DE BIENVENIDA</h4>
                    <p class="card-text ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet 
                        possimus amet iste ipsa. Excepturi iste laudantium fugit consectetur rem ad, voluptate obcaecati 
                        sint non, dignissimos earum deleniti ipsum eum sunt!</p>
            </div>
        </div>   
        <?php
            include("galeria1.php");
            include("galeria2.php");
            //include("prueba.php");
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="funciones.js"></script>
</body>
</html>