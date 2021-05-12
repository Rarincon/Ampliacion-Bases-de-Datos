<?php

require_once __DIR__.'/formulario.php';


class FormularioAñadirComentario extends Formulario{

 	public function generaCamposFormulario(){
       return '	<fieldset>
					Comentario:		<br><input type="text" name="comentario"></br>
					<br><input type="submit" name="enviar" value="Enviar"></br>
				</fieldset>';
 	} 

 	public function procesaFormularioComentario($idZapatillas){ 
        $errores = array();	
		$comentario = $_POST['comentario'];
		if(empty($comentario)){
			$errores[] = "El comentario no puede estar vacío";
		}	
		if(count($errores) == 0){
			SAComentario::anadirComentarioSA($_SESSION["id"], time(), $comentario, $idZapatillas);
		}
		else{
			return $errores;
		}
    }
	
}
?>