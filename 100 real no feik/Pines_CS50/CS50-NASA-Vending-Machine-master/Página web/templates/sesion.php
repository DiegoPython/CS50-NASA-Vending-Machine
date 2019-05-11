<?php

	$connection = mysqli_connect('localhost', 'chessytown', '2541323', 'nasa_vending');

	session_start();

	if(isset($_SESSION['login_user']))
	{

		$usuario = $_SESSION['login_user'];

		$sql = "SELECT * from usuarios WHERE email = '$usuario'";
		$query = mysqli_query($connection, $sql);

		$row = mysqli_fetch_assoc($query);

		$login_session = $row['nombre'];
		$login_credit = $row['credito'];

		if(!isset($login_session))
		{

			mysqli_close($connection);
			header("Location: index.php");

		}

	}

	else
	{

		mysqli_close($connection);
		
	}

?>