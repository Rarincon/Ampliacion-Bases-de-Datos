<!DOCTYPE html>
<?php
	require_once __DIR__.'/includes/FormularioAñadirZapatillas.php';
	require_once __DIR__.'/includes/SA/SAZapatillas.php';
	require_once __DIR__.'/includes/TO/TOZapatillas.php';

?>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title> Añadir zapatillas </title>
	</head>
	<body>
		<div id="contenedor">	
			<?php
				require("includes/comun/cabecera.php");
				require("includes/comun/menu.php");
			?>
			<div id="contenido">
			<?php
				$opciones = array();
				$formulario = new FormularioAñadirZapatillas("anadirZapatillas",$opciones);
				echo "" . $formulario->generaFormulario() . "";
				$formulario->formularioEnviado();
			?>
			</div>
			<?php
				include("includes/comun/pie.php");
			?>
		</div> <!-- Fin del contenedor -->
	</body>
</html>