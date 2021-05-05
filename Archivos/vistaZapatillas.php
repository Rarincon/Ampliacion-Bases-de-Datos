<?php
	require_once __DIR__.'/includes/SA/SAZapatillas.php';
	require_once __DIR__.'/includes/SA/SAMarca.php';
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
						$zapas = SAZapatillas::buscaZapatillasSA($_GET['variable']);
						$marca = SAMarca::buscaMarcaSA($_GET['variable']);
					}				
					echo"<img src = " . $zapas->getPortadaZapatillas() . " width='180' height='120'></br>";
					echo "Zapatillas:			". $zapas->getNombreZapatillas() . "</br>";
					echo "Marca:	" . $marca->getMarca() ."</br>";
					echo "Tipo:	" . $marca->getTipo() ."</br>";
					echo "Fecha de lanzamiento:			" . $zapas->getFechaLanzamientoZapatillas() . "</br>";
					
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
						$opciones = array();
						$formulario = new FormularioAñadirComentario("formAnadirComentario",$opciones);
						echo "" . $formulario->generaFormularioComentario($zapas->getNombreZapatillas()) . "";
						$formulario->formularioEnviadoComentario($zapas->getNombreZapatillas());
					}				
			?>
		</div>
		<?php
			include("includes/comun/pie.php");
		?>
	</div> <!-- Fin del contenedor -->
</body>
</html>