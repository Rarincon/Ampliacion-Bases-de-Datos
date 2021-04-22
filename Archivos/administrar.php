<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo-basico.css" />
	<meta charset="utf-8">
	<title>Administrar</title>
</head>

<body>
	<div id="contenedor">
		<?php
			require("includes/comun/cabecera.php");
			require("includes/comun/menu.php");
		?>
		
		<div id="contenido">
			<p><a href = 'añadirZapatillas.php'> Añadir Zapatillas </a></p>
			<p><a href = 'borrarZapatillas.php'> Borrar Zapatillas </a></p>
			
		</div>
		<?php
			include("includes/comun/pie.php");
		?>
	</div> <!-- Fin del contenedor -->
</body>
</html>