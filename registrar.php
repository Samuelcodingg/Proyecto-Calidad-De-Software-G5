<?php 
    include("con_db.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['name'])>=1 && strlen($_POST['email'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['password'])>=1){
            $name = trim($_POST['name']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $consulta = "INSERT INTO datos(name, apellido, email, password) VALUES ('$name','$apellido','$email','$password')";
            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                ?>
                    <h3 class="ok">¡Te has inscrito correctamente!</h3>
                <?php
                    echo header("refresh:5;url=index.php");
            }
            else{
                ?>
                <h3 class="bad">¡Ups, ha ocurrido un error!</h3>
                <?php
            }
        }
        else{
            ?>
                <h3 class="bad">¡Por favor, complete los campos!</h3>
            <?php
        }
    }
    
?>