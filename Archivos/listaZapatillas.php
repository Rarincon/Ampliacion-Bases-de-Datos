<?php
	require_once __DIR__.'/includes/SA/SAZapatillas.php';
	require_once __DIR__.'/includes/TO/TOZapatillas.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo-basico.css" />
	<meta charset="utf-8">
	<title>Lista de Zapatillas</title>
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
				$listaZapatillas = SAZapatillas::listarZapatillasSA();
				$numero = sizeof($listaZapatillas);
				if($listaZapatillas == null || $numero == 0){
					echo "No hay zapatillas en la base de datos";
				}
				else{
					echo"<p>Lista de zapatillas</p>";
					for ($i = 0; $i < $numero; $i++) {
						$pelicula = $listaZapatillas[$i];
						echo "<p><img src = " . $pelicula->getPortadaZapatillas() . " width='180' height='120'>";
						echo "<br><a href = 'vistaZapatillas.php?variable=" . $pelicula->getNombreZapatillas() ."'>" . $pelicula->getNombreZapatillas() . "</a></br></p>"; 
					}
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