<?php

require_once __DIR__.'/formulario.php';
require_once __DIR__.'/SA/SAFavorito.php';


class FormularioEliminarFavorito extends Formulario{

 	public static function generaCamposFormulario($datosIniciales){
       return '	<fieldset>
					Eliminar Favorito<br>
					<input type="checkbox" name="condi" value="ok">Si<br>
					<input type="submit" name="enviar" value="Desapuntar">
				</fieldset>';
 	} 

 	public function procesaFormulario($zapas){
		SAFavorito::eliminarFavoritoSA($_SESSION["id"], $zapas);
    }
	
}
?>