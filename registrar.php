<?php 
    include("con_db.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['name'])>=1 && strlen($_POST['email'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['password'])>=1){
            $name = trim($_POST['name']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $consulta = "INSERT INTO datos(nombre, apellido, email, password) VALUES ('$name','$apellido','$email','$password')";
            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                ?>
                    <h4 class="ok">¡Te has inscrito correctamente!</h4>
                <?php
                    echo header("refresh:5;url=index.php");
            }
            else{
                ?>
                <h4 class="bad">¡Ups, ha ocurrido un error!</h4>
                <?php
            }
        }
        else{
            ?>
                <h4 class="bad">¡Por favor, complete los campos!</h4>
            <?php
        }
    }
    
?>