<?php

    include("sesion.php");

?>

<!DOCTYPE html>

<html>

    <head>
        
        <?php

            include("template.php");

        ?>

    </head>

	<body>
        
        <div id="profile">

            <?php

                if(isset($login_session))
                {
                
                    echo '<h3>Hola '.$login_session.'!</h3><br>
                        <a class="btn btn-primary" href="upload.php">Subir nuevo producto</a>
                        <br><br>
                        <b id="logout"><a href="logout.php">Log Out</a></b>';
                
                }

                else
                {

                    echo '<h2>No has iniciado sesion, <a href="/ingreso.php">haz click aqui para iniciar sesion</a></h2>';

                }

            ?>        
            
        </div>

    </body>

</html>