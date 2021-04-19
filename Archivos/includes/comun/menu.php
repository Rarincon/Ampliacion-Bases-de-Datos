<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta charset="utf-8">
	<title>Menu</title>
</head>
<body>
	<div id="indice">
		<ul id="button">			
				<li><a href="inicio.php">Inicio</a></li>
				<li><a href="contenido.php">Catalogo</a></li>			
				<?php
					if (isset($_SESSION["login"]) && ($_SESSION["login"]==true)) {
						if(isset($_SESSION["id"]) && $_SESSION["admin"]){
							echo "<li><a href='admin.php'>Administrar</a></th>";
						}	
						$id = $_SESSION["id"];
						echo "<li><a href='vistaPerfil.php?variable=$id'>Perfil</a></th>";
						echo "<li><a href='logout.php'>Salir</a></th>";
					}
					else {
						echo "<li><a href='login.php'>Login</a></th>";
					}
				?>
		</ul>
	</div>
</body>
</html>