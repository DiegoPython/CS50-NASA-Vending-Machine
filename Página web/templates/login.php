<?php
                
    session_start();
    $error = "";

    if(isset($_POST['login']) || isset($_POST['signup']))
    {

        $email = $_POST["email"];
        $password = $_POST["password"];

        $connection = mysqli_connect('localhost', 'id9431753_admin', 'nasa254', 'id9431753_nasa');

        //echo '<script>alert("Hola '. $email . ' ' . $password .'");</script>';

        $email = stripcslashes($email);
        $password = stripcslashes($password);
        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);

        //$db = mysql_select_db('id9431753_nasa', $connection);

        $sql = "SELECT * from usuarios WHERE email = '$email' AND password = '$password'";
        $query = mysqli_query($connection, $sql);
        $rows = mysqli_num_rows($query);

        //echo '<script>alert("Hola '. $row['nombre'] . ' ' . $row['email'] .'");</script>';

        if($rows == 1)
        {

            $_SESSION['login_user'] = $email;
            header("Location: usuario.php");

        }

        else
        {

            $error = "Usuario o contrasena invalidos";

        }

        mysqli_close($connection);

    }
            
?>
