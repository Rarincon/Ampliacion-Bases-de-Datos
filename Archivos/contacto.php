<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Miembros</title> 
	<link rel="stylesheet" href="css/estilo-basico.css"/>
</head> 
<body> 
	<div id="contenedor">
		<?php	
			require("includes/comun/cabecera.php");
			require("includes/comun/menu.php");
		?>
		<div id="contenido">
			<form action="mailto:CineDinCidan@gmail.com" method="post">
			<fieldset>
				<legend>Datos de contato</legend>
					Nombre:<br> <input type="text" name="nom"><br>
					E-mail:<br> <input type="text" name="mail"><br>
			</fieldset>
			<fieldset>
				<legend>Consulta</legend>
				Motivo de la consulta:<br>
				<input type="radio" name="motcon" value="E">Evaluación <br>
				<input type="radio" name="motcon" value="S">Sugerencias <br>
				<input type="radio" name="motcon" value="C">Crítica <br>
				Consulta:<br>  <textarea name="cons" maxlength="500"></textarea> <br>
				<input type="checkbox" name="condi" value="ok">Marque esta casilla para verificar que ha leído nuestros términos y condiciones del servicio
			</fieldset>
			<input type="submit" name="aceptar">
			</form>
		</div>
		<?php
			include("includes/comun/pie.php");
		?>
	</div> 
</body>
</html>