<?php
	require_once __DIR__.'/includes/SA/SAZapatillas.php';
	require_once __DIR__.'/includes/SA/SAMarca.php';
	require_once __DIR__.'/includes/TO/TOZapatillas.php';
	require_once __DIR__.'/includes/SA/SAComentario.php';
	require_once __DIR__.'/includes/TO/TOComentario.php';
	require_once __DIR__.'/includes/SA/SAFavorito.php';
	require_once __DIR__.'/includes/TO/TOFavorito.php';
	require_once __DIR__.'/includes/FormularioAñadirComentario.php';
	require_once __DIR__.'/includes/FormularioAnadirFavorito.php';
	require_once __DIR__.'/includes/FormularioEliminarFavorito.php';
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
		<div id="contenidos">	
			<?php
					if(isset($_GET['variable'])){
						$zapas = SAZapatillas::buscaZapatillasSA($_GET['variable']);
						$marca = SAMarca::buscaMarcaSA($_GET['variable']);
					}	
					echo "<table style='width:100%'><tr><td style='width:15%'>";					
					echo"<img src = " . $zapas->getPortadaZapatillas() . " width='180' height='120'></br></td>";
					echo "<td style='width:85%'>Zapatillas:			". $zapas->getNombreZapatillas() . "</br>";
					echo "Marca:	" . $marca->getMarca() ."</br>";
					echo "Tipo:	" . $marca->getTipo() ."</br>";
					echo "Fecha de lanzamiento:			" . $zapas->getFechaLanzamientoZapatillas() . "</br></td></tr></table>";
					
					echo "<table style='width:100%'><tr><td style='width:50%'>";
					if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
						$apuntado = SAFavorito::buscaFavoritoSA($_SESSION["id"],$_GET['variable']);
						if(!$apuntado){					
							$opciones = array();
							$formulario = new FormularioAnadirFavorito("formAñadirFavorito", $opciones);
							echo "" . $formulario->generaFormularioFavorito($apuntado) . "";
							$formulario->formularioEnviadoFavorito($zapas->getNombreZapatillas(), $apuntado);
						}
						else {					
							$opciones = array();
							$formulario = new FormularioEliminarFavorito("formEliminarFavorito", $opciones);
							echo "" . $formulario->generaFormularioFavorito($apuntado) . "";
							$formulario->formularioEnviadoFavorito($zapas->getNombreZapatillas(), $apuntado);
						}
					}
					echo "</td><td style='width:50%'>";
					if(isset($_SESSION['id']) && isset($_SESSION['login'])){
						$opciones = array();
						$formulario = new FormularioAñadirComentario("formAnadirComentario",$opciones);
						echo "" . $formulario->generaFormularioComentario($zapas->getNombreZapatillas()) . "";
						$formulario->formularioEnviadoComentario($zapas->getNombreZapatillas());
					}
					echo "</td></tr></table>";
					
					echo "<table style='width:100%'>";
					$listaComents = SAComentario::listarComentariosSA($_GET['variable']);
					$numero = sizeof($listaComents);
					if($listaComents == null || $numero == 0){
						echo "<tr><td>No hay comentarios</br></td></tr><tr>";
					}
					else{
						echo"<tr><td><p>Lista de Comentarios</p></td></tr><tr>";
						for ($i = 0; $i < $numero; $i++) {
							if($i !=0 && $i%4==0)echo"</tr><tr>";
							echo"<td style='width:33%'>";
							$coment = $listaComents[$i];
							echo "<p>Usuario: " . $coment->getIdUsuario() . " " . $coment->getFecha() . " ";
							echo "<br>Comentario: " . $coment->getComentario() ."</br>";
							echo "</p></td>";
						}
					}
					
					echo "</tr></table>";
			?>
		</div>
		<?php
			include("includes/comun/pie.php");
		?>
	</div> <!-- Fin del contenedor -->
</body>
</html>