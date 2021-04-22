<?php
	require_once __DIR__.'/includes/SA/SAZapatillas.php';
	require_once __DIR__.'/includes/TO/TOZapatillas.php';
	require_once __DIR__.'/includes/SA/SAComentario.php';
	require_once __DIR__.'/includes/TO/TOComentario.php';
	require_once __DIR__.'/includes/FormularioAñadirComentario.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo-basico.css" />
	<meta charset="utf-8">
	<title>Zapatillas</title>
</head>
<body>
	<div id="contenedor">
		<?php
			require("includes/comun/cabecera.php");
			require("includes/comun/menu.php");
		?>
		<div id="contenido">
			<?php
					if(isset($_GET['variable'])){
						$pelicula = SAZapatillas::buscaZapatillasSA($_GET['variable']);
					}				
					echo"<img src = " . $pelicula->getPortadaZapatillas() . " width='180' height='120'></br>";
					echo "Zapatillas:			". $pelicula->getNombreZapatillas() . "</br>";
					echo "Marca:	" . $pelicula->getMarcaZapatillas() ."</br>";
					echo "Fecha de lanzamiento:			" . $pelicula->getFechaLanzamientoZapatillas() . "</br>";
					
					echo "Comentarios</br>";
					$listaComents = SAComentario::listarComentariosSA($_GET['variable']);
					$numero = sizeof($listaComents);
					if($listaComents == null || $numero == 0){
						echo "No hay comentarios</br>";
					}
					else{
						echo"<p>Lista de Comentarios</p>";
						for ($i = 0; $i < $numero; $i++) {
							$coment = $listaComents[$i];
							echo "<p>Usuario: " . $coment->getIdUsuario() . " " . $coment->getFecha() . " ";
							echo "<br>Comentario: " . $coment->getComentario() ."</br>";
							echo "</p>";
						}
					}
					if(isset($_SESSION['id']) && isset($_SESSION['login'])){
						$opciones = "";
					$formulario = new FormularioAñadirComentario($opciones);
					echo "" . $formulario->generaFormularioComentario($pelicula->getNombreZapatillas(), NULL) . "";
					$formulario->formularioEnviadoComentario($pelicula->getNombreZapatillas(), NULL);
					}				
			?>
		</div>
		<?php
			include("includes/comun/sidebarDer.php");
			include("includes/comun/pie.php");
		?>
	</div> <!-- Fin del contenedor -->
</body>
</html>