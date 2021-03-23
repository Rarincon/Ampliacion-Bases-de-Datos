<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta charset="utf-8">
	<title>Cabecera</title>
</head>
<body>
	<div id="cabecera">
		<h1>Mi gran página web</h1>
		<div class="saludo">
			<?php
				if (isset($_SESSION["login"]) && ($_SESSION["login"]==true)) {
					echo "Bienvenido, {$_SESSION['nombre']} <a href='logout.php'>Salir</a>";
				}
				else {
					echo "Usuario desconocido. <a href='login.php'>Login</a>";
				}
			?>
		</div>
	</div>
</body>
</html>