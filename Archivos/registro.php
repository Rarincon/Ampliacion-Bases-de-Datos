<?php
	require_once __DIR__.'/includes/FormularioRegistro.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<title> Registro </title>
	</head>
	<body>
		<div id="contenedor">
			<?php
				require("includes/comun/cabecera.php");
				require("includes/comun/menu.php");
			?>
			<div id="contenido">
				<?php 				
				$opciones = "registro";
				$formulario = new FormularioRegistro($opciones);
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