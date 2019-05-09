<?php

	$connection = mysqli_connect('localhost', 'id9431753_admin', 'nasa254', 'id9431753_nasa');

	session_start();

	if(isset($_SESSION['login_user']))
	{

		$usuario = $_SESSION['login_user'];

		$sql = "SELECT nombre from usuarios WHERE email = '$usuario'";
		$query = mysqli_query($connection, $sql);

		$row = mysqli_fetch_assoc($query);

		$login_session = $row['nombre'];

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