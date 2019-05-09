<?php

	include("session.php");

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
			
			<h2>Hola <?php echo $login_session; ?></h2>

			<a href="logout.php">Log out</a>

		</div>

	</body>

</html>>