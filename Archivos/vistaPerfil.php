<?php
	require_once __DIR__.'/includes/SA/SAUsuario.php';
	require_once __DIR__.'/includes/TO/TOUsuario.php';
	require_once __DIR__.'/includes/SA/SAFavorito.php';
	require_once __DIR__.'/includes/TO/TOFavorito.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo-basico.css" />
	<meta charset="utf-8">
	<title>Perfil</title>
</head>
<body>
	<div id="contenedor">
	
		<?php
			require("includes/comun/cabecera.php");
			require("includes/comun/menu.php");
		?>
		<div id="contenido">
		<div id="scrol">
			<?php
				if (isset($_GET['variable'])){
					$perfilUsuario = SAUsuario::buscaUsuarioSA($_GET['variable']);
				}
				echo "Nick: ". $perfilUsuario->getIdUsuario() . "</br>";
				echo "Nombre: " . $perfilUsuario->getNombreUsuario() ."</br>";
				echo "Fecha de nacimiento: " . $perfilUsuario->getFechaUsuario() . "</br>";
				echo "Correo electrónico: " . $perfilUsuario->getCorreoUsuario() . "</br>";
				
				$listaFavoritos = SAFavorito::listarFavoritosSA();
				$numero = sizeof($listaFavoritos);
				if($listaFavoritos == null || $numero == 0){
					echo "<p>No tienes ninguna zapatilla favorita</p>";
				}
				else{
					echo"<p>Favoritos</br>";	
					for ($i = 0; $i < $numero; $i++) {
						$evento = $listaFavoritos[$i];		
						echo "<a href = 'vistaZapatillas.php?variable=" . $evento/*->getIdEvento()*/ ."'>" . $evento/*->getIdEvento()*/ . "</a></br>";
					}
					echo "</p>";
				}
			?>
		</div>
		</div>
		<?php
			include("includes/comun/pie.php");
		?>
	</div> <!-- Fin del contenedor -->
</body>
</html>