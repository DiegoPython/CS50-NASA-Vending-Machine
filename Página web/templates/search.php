<?php

    include("template.php");

?>

<!DOCTYPE html>

<html>

    <body>

        <?php if(isset($_POST['search'])): ?>

            <?php
                
                $mysqli = new mysqli('localhost', 'id9431753_admin', 'nasa254', 'id9431753_nasa');
                                
                if(!$mysqli)
                {
                                
                    die('No pudo conectarse: ' . mysql_error());
                                
                }
                                
                //echo 'Conectado satisfactoriamente';
                
                if(isset($_POST['search']))
                {
                
                
                    $nombre = $_POST['busqueda'];

                    $sql = "SELECT nombre, imagen, precio, stock from productos WHERE nombre LIKE '".$nombre."%'";
                    $result = $mysqli-> query($sql);

                    if($result -> num_rows > 0)
                    {

                        while($row = $result-> fetch_assoc())
                        {

                            echo
                            "<img src=\"".$row["imagen"]."\" widht=1000 height=200>
                            <div class=\"inner\">
                                <h4>".$row["nombre"]."</h4>
                                <h5>Precio: ".$row["precio"]."</h5>
                                <h6>Stock: ".$row["stock"]."</h6>
                                <form class=\"form-inline my-2 my-lg-0\">
                                    <button class=\"btn btn-dark\" type=\"submit\">Comprar</button>
                                </form>
                            </div>";

                        }

                    }

                    else
                        echo "0 result";
                
                }
            
            ?>

        <?php endif; ?>
        <br>
        <a href="/">Regresar a inicio</a>

    </body>

</html>