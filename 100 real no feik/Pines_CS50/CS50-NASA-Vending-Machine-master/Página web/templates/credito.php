<?php
               
    include("sesion.php");           
    
    $connection = mysqli_connect('localhost', 'chessytown', '2541323', 'nasa_vending');

    session_start();
    
    if(isset($_POST['credits']))
    {

        $credito = $_POST['credito'] + $login_credit;

        $sql = "UPDATE usuarios SET credito = '$credito' WHERE nombre = '$login_session'";
        $query = mysqli_query($connection, $sql);
        $credito = 0;

        header("Location: usuario.php");

    }
            
?>
