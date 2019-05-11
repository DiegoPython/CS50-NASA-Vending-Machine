

<!DOCTYPE html>

<!-- <button class=\"btn btn-dark\" type=\"submit\" >Comprar</button>-->
<!-- <button class=\"btn btn-dark\" type=\"submit\" name=\"sumbit\" value=\"a\">Comprar</button> -->
<?php
    session_start();
?>
<html>

	<head>

        <?php
        
            include ("template.php");
            include("qrlib.php");
        ?>
        
    </head>

	<body>

        <div class="thumbnails">

            <div class="box">
                
                <?php
                
                    session_start();

                	$mysqli = new mysqli('localhost', 'chessytown', '2541323', 'nasa_vending');
					
					if(!$mysqli)
					{
					
					    die('No pudo conectarse: ' . mysql_error());
					
					}
					
					//echo 'Conectado satisfactoriamente';

					$sql = "SELECT nombre, imagen, descripcion,precio, stock, id from productos";
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
                    //$_SESSION["test"] = "TEST"; 
                ?>
            </div>
        </div>
    </body>
</html>
