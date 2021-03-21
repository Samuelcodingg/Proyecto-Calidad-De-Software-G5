<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADTECSOFT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index1.css">
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
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Catálogo</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="login.php">Mi cuenta</a></li>
          </div>
          <div class="shopping-icon">
            <span class="fas fa-shopping-basket"></span></div>
          <div class="search-icon">
          <span class="fas fa-search"></span></div>
          <div class="cancel-icon">
          <span class="fas fa-times"></span></div>
          <form action="#">
                  <input type="search" class="search-data" placeholder="Buscar" required>
                  <button type="submit" class="fas fa-search"></button>
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

          <ul class="block-content">
            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Shoes</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Bags</span>
                <small>(7)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Clothings</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div>

        <div>
          <div class="block-title">
            <h3>Marcas</h3>
          </div>

          <ul class="block-content">
            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Gucci</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Burberry</span>
                <small>(7)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Valentino</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Dolce & Gabbana</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Hogan</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Moreschi</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Givenchy</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div>
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

          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="productDetails.html">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg" alt="" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="img-container">
              <img src="image/camisa1.jpg"" />
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
              <a href="">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div>

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