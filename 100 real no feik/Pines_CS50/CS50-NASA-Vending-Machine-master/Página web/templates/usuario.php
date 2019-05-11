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
                
                    include("credito.php");

                    echo '<h3>Hola '.$login_session.'!</h3>
                        <h4>Tu credito actual es: '.$login_credit.'</h4><br>
                        <form name="credit" action="credito.php" method="post">
                            <input class="form-control" type="number" name="credito" placeholder="Credito" style="width: 250px;">
                            <button class="btn btn-dark" type="submit" name="credits">Añadir credito</button>
                        </form>
                        <br>
                        <a class="btn btn-primary" href="upload.php">Subir nuevo producto</a>
                        <br><br>
                        <b id="logout"><a href="logout.php">Log Out</a></b>';
                
                }

                else
                {

                    echo '<h2>No has iniciado sesion, <a href="/ingreso.php">haz click aquí para iniciar sesion</a></h2>';

                }

            ?>
            
        </div>

    </body>

</html>