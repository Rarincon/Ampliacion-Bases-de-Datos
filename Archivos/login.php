<?php
	require_once __DIR__.'/includes/FormularioLogin.php';
?>
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
		<?php 
			$opciones = "login";
			$formulario = new FormularioLogin( $opciones);
			echo "" . $formulario->generaFormulario() . "";
			$formulario->formularioEnviado();
		?>

	</div>	
	<?php
		include("includes/comun/pie.php");
	?>
	</div>
</body>
</html>