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

      <div class="product-layout">

        <?php
        include("con_db.php");

        if (isset($_GET['enviar'])) {

          $enviar_query = $_GET['busqueda'];

          $query = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware WHERE nombre LIKE'%$enviar_query%' OR marca LIKE '%$enviar_query%' OR id LIKE '%$enviar_query%' OR tipo LIKE '%$enviar_query%';");

          $result = mysqli_num_rows($query);

          if ($result > 0) {
            while ($data = mysqli_fetch_array($query)) {

        ?>
              <div class="product" category="<?php echo $data['tipo'] ?>">
                <div class="img-container">
                  <a href="<?php echo 'productDetails.php?id=' . $data['id'] ?>"><?php echo '<img src="' . $data['linkImagen1'] . '" alt=""/>' ?></a>
                  <!-- <img src="image/Procesadores-Intel-Core-i7-6.jpg" alt="" /> -->
                  <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                  </div>

                  <ul class="side-icons">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="far fa-heart"></i></span>
                    <span><i class="fas fa-sliders-h"></i></span>
                  </ul>
                </div>
                <div class="bottom">
                  <a href="<?php echo 'productDetails.php?id=' . $data['id'] ?>"><?php echo $data['nombre'] ?></a>
                  <div class="price">
                    <span><?php echo 'S/' . $data['precio'] ?></span>
                  </div>
                </div>
              </div>
        <?php
            }
          } else {
            echo "No se han encontrado resultados para '<b>" . $enviar_query . "</b>'.";
          }
        }

        ?>

      </div>

      <!-- PAGINATION -->
      <ul class="pagination">
        <span>1</span>
        <span>2</span>
        <span class="icon">››</span>
        <span class="last">Last »</span>
      </ul>
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
<script src="js/index1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</body>

</html>