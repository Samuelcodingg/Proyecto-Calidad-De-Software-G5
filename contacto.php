<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADTECSOFT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/w3.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/w3-theme-pink.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index1.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="https://kit.fontawesome.com/647c5e73f8.js" crossorigin="anonymous"></script>
</head>
<body class="w3-theme-d5">

<div class="header">
        <nav>
            <div class="menu-icon">
          <span class="fas fa-bars"></span></div>
          <div class="logo">
          <a href="index.php"><img src="image/Logo HadtecSoft (1).png" width="125px"></a></div>
          <div class="nav-items">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="productos.php">Catálogo</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="login.php">Mi cuenta</a></li>
          </div>
          <div class="shopping-icon">
            <span class="fas fa-shopping-basket"></span></div>
          <div class="search-icon">
          <span class="fas fa-search"></span></div>
          <div class="cancel-icon">
          <span class="fas fa-times"></span></div>
          <form action="results.php" method="get">
                  <input type="search" name="busqueda" class="search-data" placeholder="Buscar" required>
                  <button type="submit" name="enviar" class="fas fa-search"></button>
            </form>
</div>

    <section class="w3-content w3-container w3-padding-64" id="contacto">
        <h3 class="w3-center">¿DONDE NOS ENCONTRAMOS?</h3>
        <p class="w3-center">Nos encantaría saber de ti</p>
        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
                <img src="image/Ubicación-negocio.jpg" class="w3-image w3-round" style="width: 100%;">
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fas fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Lima, Perú<br/>
                    <i class="fas fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Teléfono de Contacto: 9999999999<br/>
                    <i class="fas fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: Grupo5_CalidadDeSoftware@ejemplo.com<br/>
                </div>
                <p>Si gusta, puede contactarnos a través de este formulario</p>
                <form action="formulario.php" method="POST" target="_blank">
                    <div class="w3-row-padding" style="margin: 0 -16px 8px -16px;">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Introduzca su nombre" name="Nombre" required>
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Introduzca su apellido" name="Apellido" required>
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="email" placeholder="Introduzca su Email" name="Email" required>
                    <input class="w3-input w3-border" type="tel" placeholder="Introduzca su Teléfono" name="Telefono" required>
                    <textarea class="w3-input w3-border" placeholder="Introduzca su mensaje" rows="4"></textarea>
                    <button class="w3-button w3-theme-d4 w3-right w3-section"><i class="fas fa-paper-plane"></i>ENVIAR MENSAJE</button>
                </form>
            </div>
        </div>
    </section>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, consectetur.</p>
                </div>
                <div class="footer-col-2">
                <img src="image/Logo HadtecSoft (1).png">
                    <p>Nuestro propósito es hacer la compra de hardware y servicios técnicos de forma placentera</p>
                </div>
                <div class="footer-col-3">
                    <h3>Links</h3>
                    <ul>
                        <li>Cupones</li>
                        <li>Blog</li>
                        <li>Política de devolución</li>
                        <li>Política de privacidad</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Síguenos</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">HadtecSoft - Todos los derechos reservados 2021</p>
        </div>
    </div>

</body>
</html>