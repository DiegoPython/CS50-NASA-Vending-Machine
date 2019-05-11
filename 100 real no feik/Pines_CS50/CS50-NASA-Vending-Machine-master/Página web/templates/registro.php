<?php

    include("login.php");

    if(isset($_SESSION['login_user']))
    {

        header("Location: usuario.php");

    }

?>

<!DOCTYPE html>

<html>

    <head>
        
        <?php

            include("template.php");

        ?>

    </head>

    <body>

        <div>
        
            <h1 class="mb-3">Sign up</h1>
        
            <form name="signup" action="signup.php" method="post" onsubmit="return(validatesu());">
        
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" style="width: 250px;">
                </div>
        
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Correo" style="width: 250px;">
                </div>
        
                <div class="form-group">
                    <input type="password" class="form-control" name="password" maxlength="20" placeholder="Contraseña" style="width: 250px;">
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

            <a href="/ingreso.php">¿Ya tienes cuenta? Ingresa aquí</a>
        
        </div>

    </body>

    <script type="text/javascript">
        
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
