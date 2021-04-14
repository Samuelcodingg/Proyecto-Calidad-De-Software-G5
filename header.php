<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADTECSOFT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/w3.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/w3-theme-pink.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index1.css?v=<?php echo time(); ?>">
    <script src="js/jquery-3.6.0.js?v=<?php echo time(); ?>"></script>
    <script src="js/mostrar.js?v=<?php echo time(); ?>"></script>
    <script src="https://kit.fontawesome.com/647c5e73f8.js" crossorigin="anonymous"></script>
    <?php
    // require functions.php file
    require('functions.php');
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
                <li><a href="#">Nosotros</a></li>
                <li><a href="productos.php">Catálogo</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="login.php">Mi cuenta</a></li>
            </div>
            <div class="shopping-icon">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-black"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-light bg-dark"><?php echo count($product->getData('carrocompras')); ?></span>
                </a>
            </div>
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