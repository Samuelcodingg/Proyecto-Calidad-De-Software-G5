<?php
// include header.php file
include('header.php');
?>


  <!-- PRODUCTS -->

  <section class="section products">
    <div class="products-layout container">
      <div class="col-1-of-4">
        <div>
          <div class="block-title">
            <h3>Categoría</h3>
          </div>

          <div class="category_list">
            <a href="#" class="category_item centrar" category="all">Todo</a>
            <a href="#" class="category_item centrar" category="Memoria">Memorias</a>
            <a href="#" class="category_item centrar" category="Procesador">Procesadores</a>
            <a href="#" class="category_item centrar" category="Disco">Discos</a>
            <a href="#" class="category_item centrar" category="Monitor">Monitores</a>
            <a href="#" class="category_item centrar" category="Placa Madre">Placa Madre</a>
            <a href="#" class="category_item centrar" category="Teclado">Teclados</a>
            <a href="#" class="category_item centrar" category="Case">Case</a>
          </div>

        </div>

      </div>
      <div class="col-3-of-4">
        <form action="" method="get">
          <div class="item">
            <label for="sort-by">Filtrar por</label>
            <select name="sort-by" id="sort-by">
              <option value="title" selected="selected">Nombre</option>
              <option value="number">Precio</option>
            </select>
          </div>
          <div class="item">
            <label for="order-by">Orden</label>
            <select name="order-by" id="sort-by">
              <option value="ASC" selected="selected">ASC</option>
              <option value="DESC">DESC</option>
            </select>
          </div>
          <input type="submit" class="borrar-borde" value="Aplicar">
        </form>

        <div id="lista-productos">

        <div class="product-layout card-deck mb-3 text-center">

          <?php
          include("con_db.php");
          $query = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware;");

          $result = mysqli_num_rows($query);

          if ($result > 0) {
            if (isset($_GET['sort-by'])) {
              if ($_GET['sort-by'] == "number") {
                if ($_GET['order-by'] == "ASC") {
                  $query_ordenar = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware ORDER BY precio ASC;");
                } else {
                  $query_ordenar = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware ORDER BY precio DESC;");
                }
              } else {
                if ($_GET['order-by'] == "ASC") {
                  $query_ordenar = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware ORDER BY nombre ASC;");
                } else {
                  $query_ordenar = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware ORDER BY nombre DESC;");
                }
              }
              while ($data = mysqli_fetch_array($query_ordenar)) {
          ?>
                
                <div class="card mb-4 shadow-sm" category="<?php echo $data['tipo']; ?>">
                    <div class="card-header">
                    <a id="prod" href="<?php echo 'productDetails.php?id='.$data['id']?>"><h4 class="my-0 font-weight-bold"><?php echo $data['nombre'] ?></h4></a>
                    </div>
                    <div class="card-body">
                        <!-- <img src="img/dell.jpg" class="card-img-top"> -->
                        <a id="prod" href="<?php echo 'productDetails.php?id='.$data['id']?>" target="_blank"><?php echo '<img src="' . $data['linkImagen1'] . '" class="card-img-top"/>' ?></a>
                        <!-- <?php// echo '<img src="' . $data['linkImagen1'] . '" class="card-img-top"/>' ?> -->
                        <h1 class="card-title pricing-card-title precio">S/. <span class=""><?php echo $data['precio'] ?></span></h1>
                        <!-- <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>1 TB DD</li>
                        </ul> -->
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="<?php echo $data['id']?>">Comprar</a>
                    </div>
                </div>
              <?php
              }
            } else {
              while ($data = mysqli_fetch_array($query)) {
              ?>
                

                <div class="card mb-4 shadow-sm" category="<?php echo $data['tipo'] ?>">
                    <div class="card-header">
                    <a id="prod" href="<?php echo 'productDetails.php?id='.$data['id']?>"><h4 class="my-0 font-weight-bold"><?php echo $data['nombre'] ?></h4></a>
                    
                    </div>
                    <div class="card-body">
                        <!-- <img src="img/dell.jpg" class="card-img-top"> -->
                        <?php echo '<a id="prod" href="productDetails.php?id='.$data['id'].'" target="_blank"><img src="' . $data['linkImagen1'] . '" class="card-img-top"/></a>' ?>
                        <h1 class="card-title pricing-card-title precio">S/. <span class=""><?php echo $data['precio'] ?></span></h1>
                        <!-- <a href="index.php">s</a> -->
                        <!-- <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>1 TB DD</li>
                        </ul> -->
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="<?php echo $data['id']?>">Comprar</a>
                    </div>
                </div>
          <?php
              }
            }
          }

          ?>

        </div>
        </div>
      </div>
    </div>
  </section>


  <!--Oferta-->

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
  
  <script src="js/index1.js?v=<?php echo time(); ?>"></script>
  <script src="js/jquery-3.4.1.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/bootstrap.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/sweetalert2.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/carrito.js?v=<?php echo time(); ?>"></script>
    <script src="js/pedido.js?v=<?php echo time(); ?>"></script>
</body>

</html>