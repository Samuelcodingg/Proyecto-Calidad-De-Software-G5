<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Include autoload.php file
require 'vendor/autoload.php';
// Create object of PHPMailer class
$mail = new PHPMailer(true);

$output = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        // Gmail ID which you want to use as SMTP server
        $mail->Username = 'disneyplus.2020.g3@gmail.com';
        // Gmail Password
        $mail->Password = 'dp2020is';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email ID from which you want to send the email
        $mail->setFrom($_POST['email'], $_POST['name']);
        // Recipient Email ID where you want to receive emails
        $mail->addAddress('hadtecsoftfisi@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Form Submission';
        $mail->Body = "<h4>Nombre : $name <br>Email : $email <br>Mensaje : $message</h4>";

        $mail->send();
        $output = '<div class="alert alert-success">
                  <h5>Gracias por contactarnos. Estaremos respondiendo tu consulta muy pronto</h5>
                </div>';
    } catch (Exception $e) {
        $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADTECSOFT</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <script src="js/popper.min.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css?v=<?php echo time(); ?>" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/sweetalert2.min.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/w3.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/w3-theme-pink.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index1.css?v=<?php echo time(); ?>">
    <script src="js/jquery-3.6.0.js?v=<?php echo time(); ?>"></script>
    <script src="js/mostrar.js?v=<?php echo time(); ?>"></script>
    <script src="https://kit.fontawesome.com/647c5e73f8.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>


    <?php
    // require functions.php file

    ?>
</head>

<body>

    <div class="header">
        <nav>
            <div class="menu-icon">
                <span class="fas fa-bars"></span>
            </div>
            <div class="logo">
            <a href="index.php"><img src="image/Logo HadtecSoft (1).png" width="125px" onclick="window.location.href='index.php'"></a>
            </div>
            <div class="nav-items" style="margin-top:18px;">
            <?php
                    session_start();
                    if(!empty($_SESSION['username'])){
                        $nombre = $_SESSION['username'];
                        $apellido = $_SESSION['apellido'];
                        $email = $_SESSION['email'];
                        ?>
                            <li><a href="productos.php">Catálogo</a></li>
                            <li><a href="soporte.php">Contacto</a></li>
                            <li class="anchar"><a href="#"><?php echo $nombre;?></a></li>
                            <li><a href="login.php">Salir</a></li>
                        <?php
                    }
                    else{
                        header("location:login.php");
                    }
                ?>
                <div class="collapse navbar-collapse show" id="navbarCollapse" style="margin-left:320px;">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown show">
                            <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="30px" width="30px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></img>
                            <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                <table id="lista-carrito" class="table">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                                <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block blanco" style="color:white;">Vaciar Carrito</a>
                                <a href="#" id="procesar-pedido" class="btn btn-danger btn-block blanco" style="color:white;">Procesar
                                    Compra</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            
            <div class="search-icon">
                <span class="fas fa-search"></span>
            </div>
            <div class="cancel-icon">
                <span class="fas fa-times"></span>
            </div>
            <form name="busc" action="results.php" method="get" style="margin-top:17px;">
                <input type="search" class="search-data" name="busqueda" placeholder="Buscar" required>
                <button type="submit" name="enviar" class="fas fa-search"></button>
            </form>
        </nav>
    </div>

    <body class="bg-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mt-3">
                    <div class="card border-danger shadow">
                        <div class="card-header bg-danger text-light">
                            <h3 class="card-title">Contacta con Soporte</h3>
                        </div>
                        <div class="card-body px-4">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <?= $output; ?>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="<?php echo $nombre;?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo $email;?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Asunto</label>
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Escribe el asunto" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Mensaje</label>
                                    <textarea name="message" id="message" rows="5" class="form-control" placeholder="Escribe el mensaje" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Enviar" class="btn btn-danger btn-block" id="sendBtn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
