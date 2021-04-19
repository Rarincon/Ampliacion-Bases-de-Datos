<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta charset="utf-8">
	<title>Inicio</title>
</head>

<body>

	<div id="contenedor">

		<?php			
			require("includes/comun/cabecera.php");
			require("includes/comun/menu.php");
		?>
		
		<div id="contenido">
			<h1>Página principal</h1>
			<p> Aquí está el contenido público, visible para todos los usuarios. </p>
		</div>
		
		
		<?php
			include("includes/comun/pie.php");
		?>
	
	</div> <!-- Fin del contenedor -->

</body>
</html>