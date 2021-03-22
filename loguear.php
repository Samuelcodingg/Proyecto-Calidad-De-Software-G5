<?php 
    include("con_db.php");

    if(isset($_POST['login'])){
        $usuario = $_POST['mail'];
        $pass = $_POST['pass'];

        $consulta_loguear = "SELECT COUNT(*) as contar FROM datos WHERE email = '$usuario' and password = '$pass';";
        $resultado = mysqli_query($conex,$consulta_loguear);
        $array = mysqli_fetch_array($resultado);

        if($array['contar']>0){
            $consulta_nombre = "SELECT nombre FROM datos WHERE email='$usuario' and password='$pass'";
            $result = mysqli_query($conex,$consulta_nombre);
            $nombre = mysqli_fetch_array($result);
            ?>
            <h1 class="ok">Bienvenido</h1>
            <?php
            header("refresh:5;url=index.php");
        }
        else{
            ?>
            <h1 class="bad">Email o contraseña incorrecto.</h1>
            <?php
        }
    }
?>