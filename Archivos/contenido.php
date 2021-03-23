<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta charset="utf-8">
	<title>Contenido</title>
</head>
<body>
	<div id="contenedor">
		<?php
		session_start();
			require("cabecera.php");
			require("sidebarIzq.php");
		?>
		
		<div id="contenido">
			<?php
			if (isset($_SESSION["login"]) && ($_SESSION["login"]==true)) {
				echo "<h1>Acceso al sistema con usuario registrado</h1>";
				echo "<p>Eres un usuario vip por estar registrado</p>";
			}
			else{
				echo "<h1>Acceso al sistema con usuario no registrado</h1>";
				echo "<p>No estas registrado, para ver el contenido registrate</p>";
			}
			?>
		</div>
		
		<?php
			//include("sidebarDer.php");
			include("pie.php");
		?>
	</div>
</body>
</html>