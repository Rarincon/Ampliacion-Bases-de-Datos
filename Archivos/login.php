<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	
	<div id="contenedor">
	<?php
		require("includes/comun/cabecera.php");
		require("includes/comun/menu.php");
	?>
	
	<div id="contenido">
		<h1>Acceso al sistema</h1>
		<form action="procesarLogin.php" method="POST">
			<fieldset>
				<legend>Usuario y contraseña</legend>
				<p><label>Name:</label> <input type="text" name="username" /></p>
				<p><label>Password:</label> <input type="password" name="password" /></p>
				<button type="submit">Entrar</button>
			</fieldset>
		</form>
	</div>
	
	<?php
		include("includes/comun/pie.php");
	?>
	</div>
</body>
</html>