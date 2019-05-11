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

            <h1 class="mb-3">Log in</h1>
        
            <form name="login" action="" method="post" onsubmit="return(validateli());">
        
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Correo" style="width: 250px;">
                </div>
        
                <div class="form-group">
                    <input type="password" class="form-control" name="password" maxlength="20" placeholder="Contraseña" style="width: 250px;">
                </div>

                <button class="btn btn-primary" name="login" type="submit">Log in</button>

                <span><?php echo $error; ?></span>
            
            </form>
        
        </div>

        <br>

        <a href="/registro.php">¿No tienes cuenta? Registrate</a>

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
            
                alert("Por favor escriba su contraseña");
                document.login.password.focus();
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
