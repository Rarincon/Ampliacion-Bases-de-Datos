<?php

require_once __DIR__.'/formulario.php';


class FormularioBorrarZapatillas extends Formulario{

 	public function generaCamposFormulario(){
       return '	<fieldset>
					<legend> Datos de las zapatillas </legend>
					Nombre:			<br><input type="text" name="nombre"></br>	
					<br><input type="submit" name="enviar" value="Enviar"></br>
				</fieldset>';
 	} 

 	public function procesaFormulario(){ 
        $errores = array();
		$nombre = $_POST['nombre'];
		if(empty($nombre)){
			$errores[] = "El nombre de las zapatillas no puede estar vacío";
		}
		if(count($errores) == 0){
			SAZapatillas::borrarZapatillasSA($nombre);
		}
		else{
			return $errores;
		}
    }
	
}
?>