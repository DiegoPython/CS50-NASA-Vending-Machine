<?php

    include("template.php");

?>

<!DOCTYPE html>

<html>

    <body>

        <?php if(isset($_POST['search'])): ?>

            <?php
                
                $mysqli = new mysqli('localhost', 'chessytown', '2541323', 'nasa_vending');
                                
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
                            "<div class=\"inner\" style=\"width: 300px;\">
                                <img src=\"".$row["imagen"]."\" width=350 height=250>
                                <h4>".$row["nombre"]."</h4>
                                <h5>".$row["descripcion"]."</h5>
                                <h6>Precio: ".$row["precio"]."</h6>
                                <h6>Stock: ".$row["stock"]."</h6>
                                <form class='form-inline my-2 my-lg-0' target = '_blank' action = 'qr.php' method='post' onsubmit='compra.php'>
                                    <input type=\"hidden\" name=\"producto\" value=\"".$row["nombre"]."\">
                                    <input type=\"hidden\" name=\"stock\" value=\"".$row["stock"]."\">
                                    <input type=\"hidden\" name=\"precio\" value=\"".$row["precio"]."\">
                                    <button class=\"btn btn-dark\" type=\"submit\" name=\"sumbit\" value=\"a\">Comprar</button>
                                </form>
                            </div>
                            <br>";

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