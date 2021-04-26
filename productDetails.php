<?php
// include header.php file
include('header.php');
?>

<!-- <body> -->
<?php include("con_db.php");
ob_start();
$id = $_GET['id'];
$query = mysqli_query($conex, "SELECT id, linkImagen1, linkImagen2, linkImagen3, linkImagen4, linkImagen5, nombre, precio, tipo, stock, descripcion FROM productoshardware WHERE id = $id;");
$dataProduct = mysqli_fetch_array($query);

$id_tableCarrito = $_GET['id'];
$nombredetabla = 'carrocompras' . $id_tableCarrito;
$consultando = "SELECT item_id FROM $nombredetabla;";

$id_tableUsuario = $_GET['id'];
$queryusuario = mysqli_query($conex, "SELECT id, name, apellido, email FROM datos");
$dataUsuario = mysqli_fetch_array($queryusuario);
?>

<!-- Product Details -->
<section class="section product-detail">
  <div class="details container">
    <div class="left">
      <div class="main">
        <?php echo '<img class="imagen-producto" src="' . $dataProduct['linkImagen1'] . '" alt=""/>' ?>
      </div>

    </div>
    <div class="right">
      <span><?php echo 'Home/' . $dataProduct['tipo'] ?></span>
      <h1><?php echo $dataProduct['nombre'] ?></h1>
      <div class="price" data-id="<?php echo $dataProduct['id'] ?>"><?php echo 'S/' . $dataProduct['precio'] ?></div>
      <!--Cantidad de producto-->
      <div class="qty d-flex pt-2" style="width:220px;">
        <div class="d-flex font-rale w-25">
          <button class="qty-up border bg-light" data-id="<?php echo $dataProduct['id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
          <input type="text" data-id="<?php echo $dataProduct['id'] ?>" class="qty_input border px-2 w-100 bg-light" style="width:50px;" placeholder="1">
          <button data-id="<?php echo $dataProduct['id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
        </div>
      </div>
      <!--!Cantidad de producto-->
      <input type="hidden" name="item_id" style="width:50px;" value="<?php echo $dataProduct['id'] ?? '1'; ?>">
      <input type="hidden" name="user_id" style="width:50px;" value="<?php echo 1 ?>">
      <a href="compra.php"><button class="btn" type="submit" name="product_submit">Comprar</button></a>
      <!--<?php
          if (isset($_POST['product_submit'])) {
            $userid = $_POST['user_id'];
            $itemid = $POST['item_id'];
            $consultacarrito = "INSERT INTO $nombredetabla(user_id, item_id) VALUES ('$userid','$itemid')";
            $resultadocarrito = mysqli_query($conex, $consultacarrito);

            if ($resultadocarrito) {
              header("Location: " . $_SERVER['PHP_SELF']);
            }
          }
          ?>-->
      <h3>Detalles del Producto</h3>
      <p>
        <?php echo $dataProduct['descripcion'] ?>
      </p>
    </div>
  </div>
</section>

<?php
include("con_db.php");
$id_tableComments = $_GET['id'];
$nombreTabla = 'comentariosproducto' . $id_tableComments;
$consultaAux = "SELECT nombre, cantEstrellas, comentario FROM $nombreTabla;";
$val = mysqli_query($conex, $consultaAux);
if ($val !== FALSE) {
?>
  <div id="testimonials">
    <div class="testimonial-heading">
      <span>Comentarios</span>
      <h1>Clientes dicen</h1>
    </div>

    <div class="testimonial-box-container">

      <?php
      while ($dataComments = mysqli_fetch_array($val)) {
      ?>
        <div class="testimonial-box">
          <div class="box-top">
            <div class="profile">
              <div class="profile-img">
                <img src="image/bbb9d3f5-52f0-4feb-8b11-c6d2004ef41a.jpg" alt="asdasd">
              </div>
              <div class="name-user">
                <strong><?php echo $dataComments['nombre']; ?></strong>
              </div>
            </div>
            <div class="reviews">
              <?php
              echo '<strong>' . $dataComments['cantEstrellas'] . '       ' . '</strong>';
              for ($i = 0; $i < $dataComments['cantEstrellas']; $i++) {
                echo '<i class="fas fa-star"></i>';
              }
              ?>
            </div>
          </div>
          <div class="client-comment">
            <p><?php echo $dataComments['comentario']; ?></p>
          </div>
        </div>

      <?php
      }


      ?>
    </div>
  </div>
<?php

} else {
  $consultaCrear = "CREATE TABLE `registro`.`$nombreTabla` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(100) NOT NULL , `cantEstrellas` INT(1) NOT NULL , `comentario` VARCHAR(300) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
  $queryCrear = mysqli_query($conex, $consultaCrear);
}

?>
</section>


<section class="w3-content w3-container w3-padding-64" id="contacto">
  <h3 class="">DEJA UN COMENTARIO</h3>
  <p class="">Nos importa tu opinión</p>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m8 w3-panel">

      <form action="" method="POST" target="_blank">
        <div class="w3-row-padding" style="margin: 0 -16px 8px -16px;">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Introduzca su nombre" name="Nombre" required>
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="number" placeholder="Introduzca cantidad de estrellas" name="numero" required>
          </div>
        </div>
        <textarea class="w3-input w3-border" placeholder="Introduzca su mensaje" rows="4" name="message"></textarea>
        <button class="w3-button w3-theme-d4 w3-right w3-section" name="enviar"><i class="fas fa-paper-plane"></i>ENVIAR COMENTARIO</button>
      </form>

      <?php
      if (isset($_POST['enviar'])) {
        if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['numero']) >= 1 && strlen($_POST['message']) >= 1) {
          $name = trim($_POST['Nombre']);
          $number = trim($_POST['numero']);
          $mensaje = trim($_POST['message']);
          $consulta = "INSERT INTO $nombreTabla(nombre, cantEstrellas, comentario) VALUES ('$name','$number','$mensaje')";
          $resultado = mysqli_query($conex, $consulta);
          if ($resultado) {
      ?>
          <?php
            header("Location: productDetails.php?id=" . urlencode($id_tableComments));
          } else {
          ?>
          <?php
          }
        } else {
          ?>
      <?php
        }
      }
      ?>
    </div>
  </div>
</section>

<!-- Footer -->
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
<!-- End Footer -->

<!-- Custom Scripts -->
<script src="js/products.js"></script>
<script src="js/slider.js"></script>
<script src="js/index.js"></script>
<script src="js/index1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="js/index1.js?v=<?php echo time(); ?>"></script>
  <script src="js/jquery-3.4.1.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/bootstrap.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/sweetalert2.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/carrito.js?v=<?php echo time(); ?>"></script>
    <script src="js/pedido.js?v=<?php echo time(); ?>"></script>
</body>

</html>