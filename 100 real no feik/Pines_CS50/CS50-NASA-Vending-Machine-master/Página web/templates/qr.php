<!DOCTYPE html>
<!-- <button class=\"btn btn-dark\" type=\"submit\" >Comprar</button>-->
<html>
	<head>

        <?php
            include("template.php");
        ?>
        
    </head>

	<body>
        <div>
            <?php

                include("qrlib.php");
                include("sesion.php");
                
                if(isset($login_session))
                {

                    session_start();

                    $precio = $_POST["precio"];
                    $stock = $_POST["stock"];

                    if($login_credit >= $precio && $stock > 0)
                    {

                        $login_credit -= $precio;
                        $stock -= 1;

                        $sql = "UPDATE usuarios SET credito = '$login_credit' WHERE nombre = '$login_session'";
                        $query = mysqli_query($connection, $sql);

                        $producto = $_POST["producto"];
                        
                        $sqlst = "UPDATE productos SET stock = '$stock' WHERE nombre = '$producto'";
                        $queryst = mysqli_query($connection, $sqlst);

                        $qr = $producto.' '.$stock;
                        echo '<h4>Guarde este codigo para recoger su producto en la maquina dispensadora, este se eliminará por cuestiones de seguridad</h4><br>';
                        QRcode::png($qr, $qr.'.png');
                        echo '<img src="'.$qr.'.png">';
                        echo '<label name="producto" style="visibility: hidden;">'.$producto.'</label>';
                        echo '<label name="stock" style="visibility: hidden;">'.$stock.'</label>';

                        echo '<h4>Recoge tu producto aquí</h4><br>';
                        echo '<div id="Googl3Map">';
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2074.2809201791138!2d-101.0387443424089!3d22.127943962206537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a993d23d38481%3A0x74221fc20bcb25ca!2sTecnol%C3%B3gico+de+Monterrey+Campus+San+Luis+Potos%C3%AD!5e0!3m2!1ses!2smx!4v1557539525087!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
                        echo '</div>';
                    }

                    else
                    {

                        echo '<h4>Error al realiar la compra</h4>';
                        echo '<h5>Credito insuficiente o producto acabado</h5>';

                    }

                }

                else
                {

                    echo '<h4>Necesitas iniciar sesión para hacer una compra</h4>
                        <h6>Error en la capa 8</h6><br>
                        <a href="/ingreso.php">Iniciar sesión</a><br>
                        <a href="/registro.php">Crear cuenta</a><br>
                        <a href="/index.php">Regresar a inicio</a>';

                }

            ?>
        </div>
    </body>
</html>