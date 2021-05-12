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
		<div id="contenidos">
			<?php
				echo "<table style='width:100%'>";
				$listaZapatillas = SAZapatillas::listarZapatillasSA();
				$numero = sizeof($listaZapatillas);
				if($listaZapatillas == null || $numero == 0){
					echo "<tr><td>No hay zapatillas en la base de datos</td></tr>";
				}
				else{
					echo"<tr><td><p>Lista de zapatillas</p></td></tr><tr>";
					for ($i = 0; $i < $numero; $i++) {
						if($i !=0 && $i%5==0)echo"</tr><tr>";
						$pelicula = $listaZapatillas[$i];
						echo "<td style='width:20%'><p><br><a href = 'vistaZapatillas.php?variable=" . $pelicula->getNombreZapatillas() ."'><img src = " . $pelicula->getPortadaZapatillas() . " width='180' height='120'>";
						//echo "<br><a href = 'vistaZapatillas.php?variable=" . $pelicula->getNombreZapatillas() ."'>" . $pelicula->getNombreZapatillas() . "</a></br></p></td>"; 
					}
					echo "</tr>";
				}
				echo "</table>";
			?>
		</div>
		<?php
			include("includes/comun/pie.php");
		?>
	
	</div> <!-- Fin del contenedor -->
</body>
</html>