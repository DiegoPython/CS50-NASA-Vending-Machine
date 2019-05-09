<?php

    include("template.php");

?>

<!DOCTYPE html>

<html>

    <body>

        <?php if(isset($_POST['submit'])): ?>

            <h3>Registro exitoso, bienvenido <?php echo $_POST['nombre']; ?></h3>
            <br>

            <?php
                
                $mysqli = new mysqli('localhost', 'id9431753_admin', 'nasa254', 'id9431753_nasa');
                                
                if(!$mysqli)
                {
                                
                    die('No pudo conectarse: ' . mysql_error());
                                
                }
                                
                //echo 'Conectado satisfactoriamente';
                
                if(isset($_POST['submit']))
                {
                
                    $nombre = $_POST["nombre"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                
                    //echo '<script>alert("Hola '. $nombre . ' ' . $email . ' ' . $password .'");</script>';
                
                    $sql = "INSERT INTO usuarios (nombre, email, password, credito, rol) VALUES ('".$nombre."', '".$email."', '".$password ."', 0, 'USUARIO')";
                
                    if($mysqli-> query($sql))
                    {
                    
                        echo '<script>alert("Registro existoso");</script>';
                    
                    }
                
                }
            
            ?>

        <?php endif; ?>

        <a href="/ingreso.php">Iniciar sesion</a>

    </body>

</html>