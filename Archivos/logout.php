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
			require("includes/comun/cabecera.php");
			require("includes/comun/menu.php");
		?>
		<div id="contenido">
			<?php
				session_destroy();
				unset($_SESSION["id"]);
				$_SESSION["login"] = false;
				$_SESSION["admin"] = false;
				echo "<h2> Ha cerrado la sesion, vuelva pronto</h2>";
			?>

		</div>
			<?php
				include("includes/comun/pie.php");
			?>
	</div>
</body>
</html>