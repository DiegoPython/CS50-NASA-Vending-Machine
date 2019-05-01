<!DOCTYPE html>

<html>

    <head>

        <meta name="viewport" content="initial-scale=1, width=device-width">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <link href="/static/styles.css" rel="stylesheet">
        
        <title>NASA Vending Machine</title>

        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand mb-1 h1" href="/">NASA Vending Machine</a>

            <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" type="button" data-target="#navbarNav" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/usuario.html">Usuario</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/ingreso.php">Ingreso</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Busca productos" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Buscar</button>
                </form>

            </div>

        </nav>
        
    </head>

    <body>

        <?php if(isset($_POST['form_submitted'])): ?>

            <h2>Gracias <?php echo $_POST['nombre']; ?></h2>

            <!--<?php

                /*$mysqli = new mysqli('localhost', 'id9431753_admin', 'nasa254', 'id9431753_nasa');
                                
                if(!$mysqli)
                {
                                
                    die('No pudo conectarse: ' . mysql_error());
                                
                }
                                
                //echo 'Conectado satisfactoriamente';

                //if(isset($_POST['submit']))
                //{

                    $nombre = $_POST["nombre"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];

                    echo '<script>alert("Hola '. $nombre . ' ' . $email . ' ' . $password .'");</script>';

                    /*$sql = "INSERT INTO usuarios(nombre, email, password, credito, rol) VALUES (".$nombre.", ".$email.", ".$password .", 0, \"USUARIO\")";

                    if($mysqli-> query($sql))
                    {

                        echo '<script>alert("Registro existoso");</script>';

                    }*/

                //}*/

            ?>-->

    </body>

</html>
