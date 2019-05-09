<!DOCTYPE html>
<html>

    <head>
        
        <?php

            include("template.php");

        ?>

    </head>

    <body>

        <?php if(isset($_POST['submit'])): ?>

            <?php
                
                $mysqli = new mysqli('localhost', 'id9431753_admin', 'nasa254', 'id9431753_nasa');

                if(!$mysqli)
                {
                                            
                    die('No pudo conectarse: ' . mysql_error());
                                            
                }        

                //include("sesion.php");

                if(isset($_POST['submit']))
                {

                    $nombre = $_POST['nombre'];
                    $precio = $_POST['precio'];
                    $descripcion = $_POST['descripcion'];
                    $stock = $_POST['stock'];
                    $imagen = $_POST['imagen'];
                    //$usuario = $login_session;

                    /*$usersql = "SELECT id from usuarios WHERE nombre = '$usuario'";
                    $userquery = mysqli_query($mysqli, $usersql);
                    $userrow = mysqli_fetch_assoc($userquery);
                    $user = $userrow['id'];*/

                    $sql = "INSERT INTO productos (nombre, imagen, descripcion, precio, stock) VALUES ('".$nombre."', '".$imagen."', '".$descripcion."', '".$precio."', '".$stock."')";

                    if($mysqli-> query($sql))
                    {

                        echo '<script>alert("Subida exitosa!");</script>';
                        echo '<h2>'.$nombre.'</h2>';

                    }

                    //header("Location: index.php");
                    

                }

            ?>

        <?php endif; ?>

    </body>

</html>
