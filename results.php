<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADTECSOFT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index1.css?v=<?php echo time(); ?>">
    <script src="js/jquery-3.6.0.js?v=<?php echo time(); ?>"></script>
    <script src="js/mostrar.js?v=<?php echo time(); ?>"></script>
    <script src="https://kit.fontawesome.com/647c5e73f8.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="header">
        <nav>
            <div class="menu-icon">
          <span class="fas fa-bars"></span></div>
          <div class="logo">
            <img src="image/Logo HadtecSoft (1).png" width="125px"></div>
          <div class="nav-items">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="productos.php">Catálogo</a></li>
          <li><a href="#">Contacto</a></li>
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
          </nav>
</div>


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
            <a href="#" class="category_item centrar" category="memorias">Memorias</a>
            <a href="#" class="category_item centrar" category="procesadores">Procesadores</a>
            <a href="#" class="category_item centrar" category="discos">Discos</a>
            <a href="#" class="category_item centrar" category="monitores">Monitores</a>
            <a href="#" class="category_item centrar" category="placaMadre">Placa Madre</a>
            <a href="#" class="category_item centrar" category="teclados">Teclados</a>
            <a href="#" class="category_item centrar" category="case">Case</a>
          </div>

        </div>

        <!-- <div>
          <div class="block-title">
            <h3>Marcas</h3>
          </div>

          <div class="category_list">
            <a href="#" class="category_item centrar" category="all">Todo</a>
            <a href="#" class="category_item centrar" category="hyperx">Hyperx</a>
            <a href="#" class="category_item centrar" category="Toshiba"></a>
            <a href="#" class="category_item centrar" category="discos">Discos</a>
            <a href="#" class="category_item centrar" category="monitores">Monitores</a>
            <a href="#" class="category_item centrar" category="placaMadre">Placa Madre</a>
            <a href="#" class="category_item centrar" category="teclados">Teclados</a>
            <a href="#" class="category_item centrar" category="case">Case</a>
          </div>

        </div> -->
      </div>
      <div class="col-3-of-4">
        <form action="">
          <div class="item">
            <label for="sort-by">Sort By</label>
            <select name="sort-by" id="sort-by">
              <option value="title" selected="selected">Name</option>
              <option value="number">Price</option>
              <option value="search_api_relevance">Relevance</option>
              <option value="created">Newness</option>
            </select>
          </div>
          <div class="item">
            <label for="order-by">Order</label>
            <select name="order-by" id="sort-by">
              <option value="ASC" selected="selected">ASC</option>
              <option value="DESC">DESC</option>
            </select>
          </div>
          <a href="">Apply</a>
        </form>

        <div class="product-layout">

          <?php
            include("con_db.php");

            if(isset($_GET['enviar'])){
              
              $enviar_query = $_GET['busqueda'];

            $query = mysqli_query($conex, "SELECT id, linkImagen1, nombre, precio, tipo FROM productoshardware WHERE nombre LIKE'%$enviar_query%' OR marca LIKE '%$enviar_query%' OR id LIKE '%$enviar_query%' OR tipo LIKE '%$enviar_query%';");

            $result = mysqli_num_rows($query);

            if($result > 0){
              while($data = mysqli_fetch_array($query)){

                ?>
                <div class="product" category="<?php echo $data['tipo']?>">
                <div class="img-container">
                <a href="<?php echo 'productDetails.php?id='.$data['id'] ?>"><?php echo '<img src="'.$data['linkImagen1'].'" alt=""/>'?></a>
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
                  <a href="<?php echo 'productDetails.php?id='.$data['id'] ?>"><?php echo $data['nombre']?></a>
                  <div class="price">
                    <span><?php echo 'S/'.$data['precio'] ?></span>
                  </div>
                </div>
              </div>
<?php
              }
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
</body>
</html>
