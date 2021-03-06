<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    <script src="js/jquery-3.6.0.js?v=<?php echo time(); ?>"></script>
    <title>HADTECSOFT | Log-In</title>
</head>
<body>
    <div class="login-page">
        <div class="box">
            <div class="left">
                <h3 style="text-align:center;">Bienvenido a HadtecSoft, cree una cuenta para ingresar.</h3>
                <button type="button" class="register-btn"> Registrarme</button>
            </div>
            <div class="right">
                <h3>¿Ya tienes una cuenta?</h3>
                <button type="button" class="login-btn"> Iniciar sesión</button>
            </div>
            <div class="form">
                <!--Inicio del formulario Inicio Sesión-->
                <form class="login-form " method="post">
                    <h3>Inicia sesión</h3>
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" name="mail">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Contraseña" class="form-control" name="pass">
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox"> Recuérdame
                        </label>
                    </div>
                    <input type="submit" class="submit-btn" value="Iniciar Sesión" name="login">
                    <p><a href="#" class="register-btn">Registrarse</a> | <a href="#" class="lost-pass-btn">¿Olvidaste tu contraseña?</a></p>
                </form>
                <?php
                    include("loguear.php");
                ?>
                <!--Final del formulario Inicio de sesión-->

                 <!--Inicio del formulario Registro-->
                 <form class="register-form form-hidden" method="post">
                    <h3>Registrarse</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Nombre" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Apellido" class="form-control" name="apellido">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Contraseña" class="form-control" name="password">
                    </div>
                    <input type="submit" class="submit-btn" value="Registrarme" name="register">
                    <p><a href="#" class="login-btn">Ya tengo una cuenta</a> | <a href="#" class="lost-pass-btn">¿Olvidaste tu contraseña?</a></p>
                </form>
                <?php
                    include("registrar.php");
                ?>
                <!--Final del formulario Registro-->

                <!--Inicio del formulario Olvidé mi contraseña-->
                 <div class="lost-password-form form-hidden">
                    <h3>Olvidé mi contraseña</h3>
                    <h5>Recibirás un email con un link para crear una nueva contraseña</h5>
                    
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                  
                    <button type="button" class="submit-btn">Nueva contraseña</button>
                    <p><a href="#" class="login-btn">Iniciar sesión</a> | <a href="#" class="register-btn">Registrarse</a></p>
                </div>
                <!--Final del formulario Olvidé mi contraseña-->
            </div>
        </div>
    </div>
    <script src="js/login.js?v=<?php echo time(); ?>"></script>
</body>
</html>