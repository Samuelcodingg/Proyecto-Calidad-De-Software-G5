<?php
// include header.php file
include('header.php');
?>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Descubre la nueva manera de <br> adquirir hardware</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi corporis <br> culpa, minima aut totam voluptatibus qui vero mollitia sit maxime.</p>
                    <a href="productos.php" class="btn">Ver más &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="image/budget-gaming-pc.png">
                </div>
            </div>
        </div>
    </div>

    <!--Categorías destacadas-->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="image/categoria-laptop.jpg">
                </div>
                <div class="col-3">
                    <img src="image/categoria-placas.jpg">
                </div>
                <div class="col-3">
                    <img src="image/categoria-servicios.jpg">
                </div>
            </div>
        </div>

    </div>


    <?php  
        include("con_db.php");
        $query = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware WHERE id<=6;");
        $result = mysqli_num_rows($query);
        $i = 0;

        if($result>0){
            ?>
            <div class="small-container">
                <h2 class="title">Productos destacados</h2>
                <div class="row">
                    <?php
                    while($info = mysqli_fetch_array($query)){
                        $i++;
                        ?>
                        <div class="col-4">
                            <img src="<?php echo $info['linkImagen1'];?>">
                            <h4><?php echo $info['nombre'];?></h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><?php echo 'S/'.$info['precio']; ?></p>
                        </div>
                        <?php
                    }
                   ?>
                </div>
            </div>
            <?php
        }
    ?>

<?php  
        include("con_db.php");
        $queryNuevos = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware WHERE id>=10;");
        $result = mysqli_num_rows($queryNuevos);
        $i = 0;

        if($result>0){
            ?>
            <div class="small-container">
                <h2 class="title">Productos destacados</h2>
                <div class="row">
                    <?php
                    while($infoNuevos = mysqli_fetch_array($queryNuevos)){
                        $i++;
                        ?>
                            <div class="col-4">
                                <img src="<?php echo $infoNuevos['linkImagen1'];?>">
                                <h4><?php echo $infoNuevos['nombre'];?></h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p><?php echo 'S/'.$infoNuevos['precio']; ?></p>
                            </div>
                        <?php
                    }
                   ?>
                </div>
            </div>
            <?php
        }
    ?>
    <!--Oferta-->
    <!--Nuestros clientes nos avalan-->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa officia ut voluptatibus consequatur nam praesentium velit, quam molestiae, eius odio quisquam. Cupiditate deserunt non odit qui ullam reiciendis sequi saepe!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="image/user.png" alt="">
                    <h3>Lorem, ipsum.</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa officia ut voluptatibus consequatur nam praesentium velit, quam molestiae, eius odio quisquam. Cupiditate deserunt non odit qui ullam reiciendis sequi saepe!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="image/user.png" alt="">
                    <h3>Lorem, ipsum.</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa officia ut voluptatibus consequatur nam praesentium velit, quam molestiae, eius odio quisquam. Cupiditate deserunt non odit qui ullam reiciendis sequi saepe!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="image/user.png" alt="">
                    <h3>Lorem, ipsum.</h3>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
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
    <!--JS-->
    <script src="js/index1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</body>

</html>