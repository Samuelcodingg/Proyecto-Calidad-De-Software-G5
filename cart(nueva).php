<?php
ob_start();
// include header.php file
include('header.php');
?>


<!--Carrito de compras-->
<?php
$id_tableCarro = $_GET['id'];
$queryCarrito = mysqli_query($conex, "SELECT cart_id,item_id,user_id FROM datos");
$dataCarrito = mysqli_fetch_array($queryCarrito);
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-size-20" style="font-size: 20px;">Mi bolsa</h5>

        <!--Items de la bolsa-->
        <div class="row-special d-flex">
            <div class="col-sm-9">
                <!--Mis productos-->
                <div class="row-another border-top py-3 mt-3 d-flex">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['linkImagen1'] ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-size-20" style="font-size: 20px;"><?php echo $item['nombre'] ?? "Desconocido"; ?></h5>
                        <small><?php echo $item['marca'] ?? "Desconocido"; ?></small>
                        <!--Comentarios del producto-->
                        <div class="d-lg-flex">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="px-2 font-size-14">10 comentarios</a>
                        </div>
                        <!--!Comentarios del producto-->

                        <!--Cantidad de producto-->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php $item['id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="botn font-baloo text-danger px-3 border-0 bg-transparent">Eliminar</button>
                            </form>
                            <button type="submit" class="botn font-baloo text-danger px-3 border-0 bg-transparent">Guardar para después</button>
                        </div>
                        <!--!Cantidad de producto-->
                    </div>
                    <div class="col-sm-2 text-end">
                        <div class="font-size-20 text-danger" style="font-size: 20px;">
                            S/.<span class="product_price"><?php echo $item['precio'] ?? "0"; ?></span>
                        </div>
                    </div>
                </div>

                <!--!Mis productos-->
            </div>
            <!--Subtotal-->
            <div class="col-sm-3">
                <div class="sub-total text-center mt-2">
                    <h6 class="font-size-12" style="font-size:12px"><i class="fas fa-check"></i> Tu orden aplica para envío GRATIS</h6>
                    <div class="border-top py-4">
                        <h5 class="font-size-20" style="font-size: 20px;">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0; ?>)&nbsp;<span class="text-danger">S/.<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span></span></h5>
                        <button type="submit" class="bton btn-warning mt-3 py-2 px-2">Ir a pagar</button>
                    </div>
                </div>
            </div>
            <!--!Subtotal-->
        </div>
        <!--!Items de la bolsa-->
    </div>
</section>
<!--!Carrito de compras-->



<!--Productos destacados-->

<div class="small-container">
    <h2 class="title">Productos destacados</h2>
    <div class="row">
        <div class="col-4">
            <img src="image/placa-de-video.jpg">
            <h4>Lorem, ipsum dolor.</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>S/1519.99</p>
        </div>
        <div class="col-4">
            <img src="image/placa-de-video.jpg">
            <h4>Lorem, ipsum dolor.</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>S/1519.99</p>
        </div>
        <div class="col-4">
            <img src="image/placa-de-video.jpg">
            <h4>Lorem, ipsum dolor.</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>S/1519.99</p>
        </div>
        <div class="col-4">
            <img src="image/placa-de-video.jpg">
            <h4>Lorem, ipsum dolor.</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>S/1519.99</p>
        </div>
    </div>
    <h2 class="title">Productos nuevos</h2>
    <div class="row">
        <div class="col-4">
            <img src="image/Procesadores-Intel-Core-i7-6.jpg">
            <h4>Lorem, ipsum dolor.</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>S/1519.99</p>
        </div>
        <div class="col-4">
            <img src="image/Procesadores-Intel-Core-i7-6.jpg">
            <h4>Lorem, ipsum dolor.</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>S/1519.99</p>
        </div>
        <div class="col-4">
            <img src="image/Procesadores-Intel-Core-i7-6.jpg">
            <h4>Lorem, ipsum dolor.</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>S/1519.99</p>
        </div>
        <div class="col-4">
            <img src="image/Procesadores-Intel-Core-i7-6.jpg">
            <h4>Lorem, ipsum dolor.</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>S/1519.99</p>
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