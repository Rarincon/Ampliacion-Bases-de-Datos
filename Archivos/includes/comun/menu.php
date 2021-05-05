<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estiloComun.css" />
	<meta charset="utf-8">
	<title>Menu</title>
</head>
<body>
	<div id="menu">
		<table>
			<tr>
				<th><a href="inicio.php">Inicio</a></th>
				<th><a href="listaZapatillas.php">Catalogo</a></th>		
				<?php
					if (isset($_SESSION["login"]) && ($_SESSION["login"]==true)) {
						if(isset($_SESSION["id"]) && $_SESSION["admin"]){
							echo "<th><a href='administrar.php'>Administrar</a></th>";
						}	
						$id = $_SESSION["id"];
						echo "<th><a href='vistaPerfil.php?variable=$id'>Perfil</a></th>";
						echo "<th><a href='logout.php'>Salir</a></th>";
					}
					else {
						echo "<th><a href='login.php'>Login</a></th>";
						echo "<th><a href='registro.php'>Registrarse</a></th>";
					}
				?>
			</tr>
		</table>
	</div>
</body>
</html>