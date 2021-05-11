<?php

require_once __DIR__.'/formulario.php';
require_once __DIR__.'/SA/SAFavorito.php';


class FormularioAnadirFavorito extends Formulario{

 	public static function generaCamposFormulario($datosIniciales){
       return '	<fieldset>
					Añadir a Favoritos<br>
					<input type="checkbox" name="condi" value="ok">Si<br>
					<input type="submit" name="enviar" value="Enviar">
				</fieldset>';
 	} 

 	public function procesaFormulario($idZapatilla){
		SAFavorito::anadirFavoritoSA($_SESSION["id"], $idZapatilla);
    }
	
}
?>