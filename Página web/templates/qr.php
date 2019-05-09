   
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
            <a class="navbar-brand mb-1 h1" >NASA Vending Machine</a>

        </nav>
        
    </head>

	<body>
        <div>
            <br>
            <div align="center">
                <div id='output'></div>
            </div>    
            <br>
            <?php
                echo $_POST["nombre"];
                echo "<br><br>";
                echo $_POST["stock"];
            ?>
        </div>
    </body>
    <script>
        let qrcode = new QRCode("output", {
                text: "http://fillmurray.com/",
                width: 255,
                height: 255,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
        });    
    </script>
</html>