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

        <div>

            <h1 class="mb-3">Log in</h1>
        
            <form name="login" action="/" method="post" onsubmit="return(validateli());">
        
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Correo">
                </div>
        
                <div class="form-group">
                    <input type="password" class="form-control" name="password" maxlength="20" placeholder="Password">
                </div>

                <button class="btn btn-primary" type="submit" value="submit">Log in</button>
            
            </form>
        
        </div>

        <br>

        <div>
        
            <h1 class="mb-3">Sign up</h1>
        
            <form name="signup" action="/" method="signup.php" onsubmit="return(validatesu());">
        
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
        
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Correo">
                </div>
        
                <div class="form-group">
                    <input type="password" class="form-control" name="password" maxlength="20" placeholder="Password">
                </div>
        
                <div class="form-group">
        
                    <div class="form-check">
                        <input type="radio" name="genero" value="hombre">
                        <label for="Hombre">Hombre</label>
                    </div>
        
                    <div class="form-check">
                        <input type="radio" name="genero" value="mujer">
                        <label for="Mujer">Mujer</label>
                    </div>
        
                    <div class="form-check">
                        <input type="radio" name="genero" value="otro">
                        <label for="Otro">Otro</label>
                    </div>
        
                </div>
        
                <button class="btn btn-primary" type="submit" name="submit">Sign up</button>

            </form>
        
        </div>

    </body>

    <script type="text/javascript">
        
        function validateli()
        {
            
            if(document.login.email.value == "")
            {
            
                alert("Por favor escriba su e-mail");
                document.login.email.focus();
                return false;
            
            }
            
            else
            {
            
                correo = document.login.email.value;
                validate = validateEmail(correo);
            
                if(validate == false)
                    return validate;
            
            }
            
            if(document.login.password.value == "")
            {
            
                alert("Por favor escriba su contrasena");
                document.login.password.focus();
                return false;
            
            }
            //alert("Registro exitoso!");
            return true;
        
        }
        
        function validatesu()
        {
        
            if(document.signup.nombre.value == "")
            {
        
                alert("Por favor escriba su nombre");
                document.signup.nombre.focus();
                return false;
        
            }
        
            if(document.signup.email.value == "")
            {
        
                alert("Por favor escriba su e-mail");
                document.signup.email.focus();
                return false;
        
            }
        
            else
            {
        
                correo = document.signup.email.value;
                validate = validateEmail(correo);
        
                if(validate == false)
                    return validate;
        
            }
        
            if(document.signup.password.value == "")
            {
        
                alert("Por favor escriba una contrasena");
                document.signup.password.focus();
                return false;
            }
        
            if(document.signup.genero.value == "")
            {
        
                alert("Por favor escoja un genero");
                return false;
        
            }
        
            //alert("Registro exitoso!");
            return true;
        
        }
        
        function validateEmail(correo)
        {
        
            email = correo;
            at = correo.indexOf("@");
            dot = correo.lastIndexOf(".");
            var v;
            
            if(at < 1 || (dot - at < 2))
            {
            
                alert("Por favor introduce un correo valido");
                return false;
            
            }
            return true;
        
        }
        
    </script>

</html>
