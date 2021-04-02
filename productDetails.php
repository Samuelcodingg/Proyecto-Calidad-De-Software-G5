<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index1.css">
  <title>HADTECSOFT</title>
</head>

<body>
  <?php include("con_db.php");
    $id = $_GET['id'];
    $query = mysqli_query($conex, "SELECT id, linkImagen1, linkImagen2, linkImagen3, linkImagen4, linkImagen5, nombre, precio, tipo, stock, descripcion FROM productoshardware WHERE id = $id;");
    $dataProduct = mysqli_fetch_array($query)
  
  ?>
  <!-- Navigation -->
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

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main">
          <?php echo '<img src="'.$dataProduct['linkImagen1'].'" alt=""/>'?>
        </div>
        <div class="thumbnails">
          <div class="thumbnail">
            <?php echo '<img src="'.$dataProduct['linkImagen2'].'" alt=""/>'?>
          </div>
          <div class="thumbnail">
            <?php echo '<img src="'.$dataProduct['linkImagen3'].'" alt=""/>'?>
          </div>
          <div class="thumbnail">
            <?php echo '<img src="'.$dataProduct['linkImagen4'].'" alt=""/>'?>
          </div>
          <div class="thumbnail">
            <?php echo '<img src="'.$dataProduct['linkImagen5'].'" alt=""/>'?>
          </div>
        </div>
      </div>
      <div class="right">
        <span><?php echo 'Home/'.$dataProduct['tipo']?></span>
        <h1><?php echo $dataProduct['nombre']?></h1>
        <div class="price"><?php echo 'S/'.$dataProduct['precio'] ?></div>

        <form class="form">
          <input type="text" placeholder="<?php echo $dataProduct['stock'] ?>" />
          <a href="cart.html" class="addCart">Add To Cart</a>
        </form>
        <h3>Product Detail</h3>
        <p>
          <?php echo $dataProduct['descripcion']?>
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
</body>

</html>