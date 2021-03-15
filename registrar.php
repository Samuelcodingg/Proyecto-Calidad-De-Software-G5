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
                    <h3>te has inscrito correctamente</h3>
                <?php
                    echo header("refresh:5;url=index.php");
            }
            else{
                ?>
                <h3>ups error</h3>
                <?php
            }
        }
        else{
            ?>
                <h3>complete</h3>
            <?php
        }
    }
    
?>