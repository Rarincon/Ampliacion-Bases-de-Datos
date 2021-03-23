<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta charset="utf-8">
	<title>logout</title>
</head>
<body>
	<?php
		session_start();
		unset($_SESSION['login']);
		unset($_SESSION['nombre']);
		unset($_SESSION['contraseña']);
		unset($_SESSION['esAdmin']);
		session_destroy();	
	?>
	
	<div id="contenedor">
		<?php
			require("cabecera.php");
			require("sidebarIzq.php");
		?>
		<div id="contenido">
			<h1>Salir</h1>
			<p>Sesion cerrada.</p>

		</div>
			<?php
				include("sidebarDer.php");
				include("pie.php");
			?>
	</div>
</body>
</html>