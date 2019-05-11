<?php

    include("sesion.php");

    if(isset($login_session))
    {

        //compra

    }

    else
    {

        echo '<script>alert("Para comprar necesitas iniciar sesión");</script>';
        header("Location: index.php");

    }

?>