<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADTECSOFT</title>
    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <script src="js/popper.min.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css?v=<?php echo time(); ?>" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/sweetalert2.min.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/w3.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/w3-theme-pink.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index1.css?v=<?php echo time(); ?>">
    <script src="js/jquery-3.6.0.js?v=<?php echo time(); ?>"></script>
    <script src="js/mostrar.js?v=<?php echo time(); ?>"></script>
    <script src="https://kit.fontawesome.com/647c5e73f8.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
    
    
    <?php
    // require functions.php file

    ?>
</head>

<body>

    <div class="header">
        <nav>
            <div class="menu-icon">
                <span class="fas fa-bars"></span>
            </div>
            <div class="logo">
                <img src="image/Logo HadtecSoft (1).png" width="125px">
            </div>
            <div class="nav-items">
                <li><a href="index.php">Inicio</a></li>
                <!-- <li><a href="#">Nosotros</a></li> -->
                <li><a href="productos.php">Catálogo</a></li>
                <!-- <li><a href="#">Contacto</a></li> -->
                <li class="anchar"><a href="login.php">Sesión</a></li>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="collapse navbar-collapse show" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown show">
                                <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="30px"
                                    width="30px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="true"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block blanco" style="color:white;">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block blanco" style="color:white;">Procesar
                                        Compra</a>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
            
            <!-- <div class="shopping-icon">
                <a href="cart(nuevo).php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-black"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-light bg-dark"></span>
                </a>
            </div> -->
            <div class="search-icon">
                <span class="fas fa-search"></span>
            </div>
            <div class="cancel-icon">
                <span class="fas fa-times"></span>
            </div>
            <form action="results.php" method="get">
                <input type="search" class="search-data" name="busqueda" placeholder="Buscar" required>
                <button type="submit" name="enviar" class="fas fa-search"></button>
            </form>
        </nav>
    </div>