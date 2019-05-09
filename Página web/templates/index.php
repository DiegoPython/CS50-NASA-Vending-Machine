

<!DOCTYPE html>
<!-- <button class=\"btn btn-dark\" type=\"submit\" >Comprar</button>-->
<html>

	<head>

        <meta name="viewport" content="initial-scale=1, width=device-width">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <script src="qrcode.js"></script>

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

                <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
                    <input class="form-control mr-sm-2" name="busqueda" type="search" placeholder="Busca productos" aria-label="Search">
                    <button class="btn btn-dark" name="search" type="submit">Buscar</button>
                </form>

            </div>

        </nav>
        
    </head>

	<body>

        <div class="thumbnails">

            <div class="box">
                
                <?php

                	$mysqli = new mysqli('localhost', 'id9431753_admin', 'nasa254', 'id9431753_nasa');
					
					if(!$mysqli)
					{
					
					    die('No pudo conectarse: ' . mysql_error());
					
					}
					
					//echo 'Conectado satisfactoriamente';

					$sql = "SELECT nombre, imagen, precio, stock from productos";
					$result = $mysqli-> query($sql);
					if($result -> num_rows > 0)
					{
						while($row = $result-> fetch_assoc())
						{
                            if(isset($_POST[submitted])){
                                $product = $_POST["nombre"];
                                $stock = $POST["stock"];
                            }
							echo
							"<img src=\"".$row["imagen"]."\">
							<div class=\"inner\">
                                <form class='form-inline my-2 my-lg-0' target = '_blank' action = 'qr.php' method='post'>    
                                    <h4 name=\"nombre\">".$row["nombre"]."</h4>
			                        <h5 name=\"precio\">Precio: ".$row["precio"]."</h5>
                                    <h6 name=\"stock\">Stock: ".$row["stock"]."</h6> 
                                    <input type = \"hidden\" name = \"submitted\" value = \"true\">                           
                                    <button class=\"btn btn-dark\" type=\"submit\" name=\"sumbit\">Comprar</button>
				                </form>
			                </div>";

						}

					}

					else
                        echo "0 result";

                ?>
            </div>
        </div>
    </body>
</html>