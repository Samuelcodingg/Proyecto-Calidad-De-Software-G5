<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADTECSOFT</title>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/w3-theme-pink.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="https://kit.fontawesome.com/647c5e73f8.js" crossorigin="anonymous"></script>
</head>
<body class="w3-theme-d5">
    <nav class="w3-top">
        <!--Barra de navegación-->
        <div class="w3-bar w3-theme-d5" id="mySidebar">
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" onclick="alternarFuncion()" title="Alternar Menu de Navegacion">
                <i class="fas fa-bars"></i>
            </a>
            <a href="#home" class="w3-bar-item w3-button"><i class="fas fa-home"></i> INICIO</a>
            <a href="#somos" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-user"></i> ¿QUIÉNES SOMOS?</a>
            <a href="#tienda" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-desktop"></i> CATÁLOGO</a>
            <a href="#contacto" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-envelope"></i> CONTÁCTANOS</a>
            <a href="login.html" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-id-badge"></i> INICIAR SESION</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red"><i class="fas fa-search"></i></a>
        </div>
        <!--Barra de navegación para dispositivos con pantallas pequeñas-->
        <div class="w3-bar-block w3-theme-d4 w3-hide w3-hide-large w3-hide-medium" id="navPeq">
            <a href="#somos" class="w3-bar-item w3-button" onclick="alternarFuncion()">¿QUIÉNES SOMOS?</a>
            <a href="#tienda" class="w3-bar-item w3-button" onclick="alternarFuncion()">TIENDA</a>
            <a href="#contacto" class="w3-bar-item w3-button" onclick="alternarFuncion()">CONTÁCTANOS</a>
            <a href="login.html" class="w3-bar-item w3-button" onclick="alternarFuncion()">INICIAR SESIÓN</a>
            <a href="#" class="w3-bar-item w3-button">BUSCAR</a>
        </div>
    </nav>
        <!--Encabezado-->
    <header class="w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-container mySlides">
            <img class="w3-image w3-animate-fading" src="image/hardware-e1551046878558.jpg" style="width:100%;">
            <h1 class="w3-xxxlarge w3-display-middle w3-container w3-padding-16 w3-theme-d1 borde">HADTECSOFT</h1>
        </div>
        <div class="w3-display-container mySlides">
            <img class="w3-image w3-animate-fading" src="image/hardware-1-e1566848759237.jpg" style="width:100%;">
            <h1 class="w3-xxxlarge w3-display-middle w3-container w3-padding-16 w3-theme-d1 borde">HADTECSOFT</h1>
        </div>
        <div class="w3-display-container mySlides">
            <img class="w3-image w3-animate-fading" src="image/reparacion.jpg" style="width:100%;">
            <h1 class="w3-xxxlarge w3-display-middle w3-container w3-padding-16 w3-theme-d1 borde">HADTECSOFT</h1>
        </div>
        <div class="w3-display-container mySlides">
            <img class="w3-image w3-animate-fading" src="image/tecnico-sostiene-destornillador-reparar-computadora_35048-769.jpg" style="width:100%;">
            <h1 class="w3-xxxlarge w3-display-middle w3-container w3-padding-16 w3-theme-d1 borde">HADTECSOFT</h1>
        </div>
        <script src="js/carrusel.js"></script>
    </header>
    <div class="bgimg-2 w3-display-container ">
        <div class="w3-display-bottommiddle">
            <span class="w3-xxlarge w3-text-white w3-wide w3-black w3-opacity-min">¿QUIÉNES SOMOS?</span>
        </div>
    </div>
    <section class="w3-content w3-container w3-padding-64" id="somos">
        <p class="w3-center">Somos una empresa que ofrece servicios técnicos en computación y productos de hardware</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel tempus eros. Maecenas libero nulla, sollicitudin id nulla aliquam, 
            hendrerit iaculis lectus. Proin quis ultricies nisi. Morbi a risus ac felis volutpat bibendum dapibus eget augue. Morbi ultrices, tellus vitae 
            semper gravida, purus orci tincidunt nibh, eu pharetra enim mauris a nulla. Nunc augue nisl, iaculis ac porta non, cursus non elit. 
            Curabitur auctor lacus in imperdiet tincidunt. Praesent viverra faucibus risus non feugiat. Duis in pharetra nisl, ut convallis diam. 
            Pellentesque aliquet ante non euismod dapibus. Cras tincidunt tellus vel mauris facilisis, quis laoreet arcu imperdiet. Maecenas pretium 
            accumsan nisi non tempor. Aliquam condimentum sem vel enim maximus ornare. Praesent ac aliquet erat, at pulvinar mi. Phasellus 
            fermentum massa lorem, eleifend pretium justo scelerisque a.</p>
            <div class="w3-row">
                <div class="w3-col m6 w3-center w3-padding-large">
                    <p><b><i class="fas fa-user w3-margin-right"></i>Colaborador 1</b></p><br/>
                    <img src="image/perfil1.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Colaborador 1" width="500" height="333">
                </div>
                <!--Ocultar en dispositivos pequeños-->
                <div class="w3-col m6 w3-hide-small w3-padding-large">
                    <p>Praesent nec tellus nunc. Praesent at diam vitae nisl lobortis aliquam eget eu massa. Nulla egestas bibendum turpis, et rutrum sem 
                        dapibus sit amet. Sed a bibendum dolor. Phasellus eget erat tincidunt, blandit mauris nec, elementum leo. Nulla facilisi. Maecenas 
                        tristique leo a ipsum faucibus, quis viverra ipsum accumsan. Sed imperdiet molestie laoreet. In et quam vitae risus molestie tempus.

                        Cras dapibus gravida euismod. Suspendisse nisi odio, aliquet vel eros id, malesuada ullamcorper nulla. Vivamus aliquet purus ac dui 
                        volutpat viverra. Aenean rhoncus eleifend neque sed tempor. Phasellus mi tortor, sodales et tortor at, commodo rhoncus neque. 
                        Phasellus nec placerat nulla, ut porttitor augue. Phasellus varius quam in justo pretium, et semper diam maximus. Vestibulum 
                        condimentum pretium luctus. Aenean hendrerit tempus augue in suscipit.</p>
                </div>
            </div>
    </section>
    <div class="bgimg-3 w3-display-container w3-opacity-min">
        <div class="w3-display-bottommiddle">
            <span class="w3-xxlarge w3-text-white w3-wide w3-black w3-opacity-min">TIENDA</span>
        </div>
    </div>
    <section class="w3-content w3-container w3-padding-64" id="tienda">
        <h3 class="w3-center">TU TIENDA VIRTUAL</h3>
        <p class="w3-center"><em>Aquí te mostramos los productos más vendidos<br/> Haz clic en ellos para tener más detalles</em></p><br/>
        <!--Receptivo. cuatro columnas para tablets, laptops y desktops - 1 columna para celulares-->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m3 w3-theme-d1" onclick="document.getElementById('imagen1').style.display = 'block'">
                <img id="img01" src="image/placa-de-video.jpg" class="w3-hover-opacity agrandar-imagen" style="width: 100%;">
                <p class="w3-center">S/1519.99</p>
            </div>
            <div class="w3-col m3 w3-theme-d1" onclick="document.getElementById('imagen2').style.display = 'block'">
                <img src="image/1585855307_ddr4_16gb_3200mhz_rgb_hyperxfury.jpg" class="w3-hover-opacity agrandar-imagen" style="width: 100%;">
                <p class="w3-center">S/359.99</p>
            </div>
            <div class="w3-col m3 w3-theme-d1" onclick="document.getElementById('imagen3').style.display = 'block'">
                <img src="image/Procesadores-Intel-Core-i7-6.jpg" class="w3-hover-opacity" style="width: 100%;">
                <p class="w3-center">S/1299.99</p>
            </div>
            <div class="w3-col m3 w3-theme-d1" onclick="document.getElementById('imagen4').style.display = 'block'">
                <img src="image/178480-800-auto.jpg" class="w3-hover-opacity" style="width: 100%;">
                <p class="w3-center">S/519.99</p>
            </div>
        </div>
        <div class="w3-center">
            <a href="#"><button class="w3-button w3-theme-d2">VER MÁS PRODUCTOS</button></a>
        </div>
    </section>
    <!--Modal-->
    <div id="imagen1" class="w3-modal w3-theme">
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <div class="container">
                <span onclick="document.getElementById('imagen1').style.display = 'none'" class="w3-button w3-large w3-theme w3-display-topright" title="Cerrar el Modal"><i class="fa fa-remove"></i></span>
                <img src="image/placa-de-video.jpg" class="w3-image">
                <br>
                <a href="#"><button class="w3-button w3-theme-d4">COMPRAR</button></a>
            </div>
        </div>
    </div>
    <div id="imagen2" class="w3-modal w3-theme">
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <div class="container">
                <span onclick="document.getElementById('imagen2').style.display = 'none'" class="w3-button w3-large w3-theme w3-display-topright" title="Cerrar el Modal"><i class="fa fa-remove"></i></span>
                <img src="image/1585855307_ddr4_16gb_3200mhz_rgb_hyperxfury.jpg" class="w3-image">
                <br>
                <a href="#"><button class="w3-button w3-theme-d4">COMPRAR</button></a>
            </div>
        </div>
    </div>
    <div id="imagen3" class="w3-modal w3-theme">
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <div class="container">
                <span onclick="document.getElementById('imagen3').style.display = 'none'" class="w3-button w3-large w3-theme w3-display-topright" title="Cerrar el Modal"><i class="fa fa-remove"></i></span>
                <img src="image/Procesadores-Intel-Core-i7-6.jpg" class="w3-image">
                <br>
                <a href="#"><button class="w3-button w3-theme-d4">COMPRAR</button></a>
            </div>
        </div>
    </div>
    <div id="imagen4" class="w3-modal w3-theme">
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <div class="container">
                <span onclick="document.getElementById('imagen4').style.display = 'none'" class="w3-button w3-large w3-theme w3-display-topright" title="Cerrar el Modal"><i class="fa fa-remove"></i></span>
                <img src="image/178480-800-auto.jpg" class="w3-image">
                <br>
                <a href="#"><button class="w3-button w3-theme-d4">COMPRAR</button></a>
            </div>
        </div>
    </div>
    <div class="bgimg-4 w3-display-container w3-opacity-min">
        <div class="w3-display-bottommiddle">
            <span class="w3-xxlarge w3-text-white w3-wide w3-black w3-opacity-min">CONTÁCTANOS</span>
        </div>
    </div>
    <section class="w3-content w3-container w3-padding-64" id="contacto">
        <h3 class="w3-center">¿DONDE NOS ENCONTRAMOS?</h3>
        <p class="w3-center">Nos encataria saber de ti</p>
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
    <footer class="w3-center w3-theme-d4 w3-padding-64 w3-opacity w3-hover-opacity-off">
        <a href="#home" class="w3-button w3-theme-d1"><i class="fas fa-arrow-up w3-margin-right"></i>Al Inicio</a>
        <div class="w3-xlarge w3-section">
            <a href="#"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-twitter w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        </div>
    </footer>
    <script src="js/parallax.js"></script>
</body>
</html>