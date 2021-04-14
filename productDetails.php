<?php
// include header.php file
include('header.php');
?>

<body>
  <?php include("con_db.php");
  ob_start();
  $id = $_GET['id'];
  $query = mysqli_query($conex, "SELECT id, linkImagen1, linkImagen2, linkImagen3, linkImagen4, linkImagen5, nombre, precio, tipo, stock, descripcion FROM productoshardware WHERE id = $id;");
  $dataProduct = mysqli_fetch_array($query);

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }

  ?>

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main">
          <?php echo '<img src="' . $dataProduct['linkImagen1'] . '" alt=""/>' ?>
        </div>
        <!-- <div class="thumbnails">
          <div class="thumbnail">
            <?php echo '<img src="' . $dataProduct['linkImagen2'] . '" alt=""/>' ?>
          </div>
          <div class="thumbnail">
            <?php echo '<img src="' . $dataProduct['linkImagen3'] . '" alt=""/>' ?>
          </div>
          <div class="thumbnail">
            <?php echo '<img src="' . $dataProduct['linkImagen4'] . '" alt=""/>' ?>
          </div>
          <div class="thumbnail">
            <?php echo '<img src="' . $dataProduct['linkImagen5'] . '" alt=""/>' ?>
          </div>
        </div> -->
      </div>
      <div class="right">
        <span><?php echo 'Home/' . $dataProduct['tipo'] ?></span>
        <h1><?php echo $dataProduct['nombre'] ?></h1>
        <div class="price"><?php echo 'S/' . $dataProduct['precio'] ?></div>
        <!--Cantidad de producto-->
        <div class="qty d-flex pt-2">
          <div class="d-flex font-rale w-25">
            <button class="qty-up border bg-light" data-id="<?php echo $dataProduct['id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
            <input type="text" data-id="<?php echo $dataProduct['stock'] ?>" class="qty_input border px-2 w-100 bg-light" placeholder="1">
            <button data-id="<?php echo $dataProduct['id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
          </div>
        </div>
        <!--!Cantidad de producto-->
        <input type="hidden" name="item_id" value="<?php echo $dataProduct['id'] ?? '1'; ?>">
        <input type="hidden" name="user_id" value="<?php echo 1 ?>">
        <?php
        if (in_array($dataProduct['id'], $Cart->getCartid($product->getData('carrocompras')) ?? [])) {
          echo '<a href="cart.php" class="btn" type="submit" disabled>En el carrito</a>';
        } else {
          echo '<a href="cart.php" class="btn" type="submit">Añadir al carrito</a>';
        }
        ?>
        <h3>Product Detail</h3>
        <p>
          <?php echo $dataProduct['descripcion'] ?>
        </p>
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
</body>

</html>