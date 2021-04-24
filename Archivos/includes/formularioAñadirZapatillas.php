<?php

require_once __DIR__.'/formulario.php';
require_once __DIR__.'/SA/SAMarca.php';


class FormularioAñadirZapatillas extends Formulario{

 	public function generaCamposFormulario(){
       return '	<fieldset>
					<legend> Datos de las zapatillas </legend>
					Nombre:			<br><input type="text" name="nombre"></br>
					Fecha Lanzamiento:<br><input type="date" name="fechaLanzamiento"></br>
					Marca:	<br><input type="text" name="marca"></br>
					Tipo:	<br><input type="text" name="tipo"></br>
					Portada:		<br><input type="file" name="imagen"/></br>	
					<br><input type="submit" name="enviar" value="Enviar"></br>
				</fieldset>';
 	} 

 	public function procesaFormulario(){ 
        $errores = array();
		$portada = $_FILES['imagen']['name'];
		$ruta ="img/portadaZapatillas/";
		$portadaFileType = $ruta. strtolower(basename($portada));
		$tempname = $_FILES['imagen']['tmp_name'];
		
		$nombre = $_POST['nombre'];
		if(empty($nombre)){
			$errores[] = "El nombre de las zapatillas no puede estar vacío";
		}
		$marca = $_POST['marca'];
		if(empty($marca)){
			$errores[] = "La marca de las zapatillas no puede estar vacío";
		} 
		$fechaLanzamiento = $_POST['fechaLanzamiento'];
		if(empty($fechaLanzamiento)){
			$errores[] = "La fecha de lanzamiento de las zapatillas no puede estar vacío";
		}
		$tipo = $_POST['tipo'];
		if(empty($tipo)){
			$errores[] = "El tipo de las zapatillas no puede estar vacío";
		} 
	
		if(count($errores) == 0){
			SAMarca::anadirMarcaSA($nombre,$marca, $tipo);
			SAZapatillas::anadirZapatillasSA($nombre, $fechaLanzamiento, $portadaFileType);			
			move_uploaded_file($tempname, $portadaFileType);
		}
		else{
			return $errores;
		}
    }
	
}
?>