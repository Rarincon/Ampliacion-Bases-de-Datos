<?php

require_once __DIR__.'/../DAO/DAOComentario.php';


class SAComentario {
	
	private static $daoComentario;
	
		/*public static function buscaComentarioSA($nombre) {
			$daoComentario = new DAOComentario();
			return $daoComentario->buscaComentarioPersDAO($nombre);
		}*/
		
		
	public static function anadirComentarioSA($nombre,$fecha, $comentario, $zapas){
		
		$daoComentario = new DAOComentario();
		if($daoComentario->buscaComentarioPersDAO($nombre))
			$daoComentario->actualizaComentarioDAO($nombre,$fecha, $comentario, $zapas);
		else
			$daoComentario->anadirComentarioDAO($nombre,$fecha, $comentario, $zapas);
		return true;
	}
		
	public static function listarComentariosSA($idZapatillas){
		$daoComentario = new DAOComentario();
		$result = $daoComentario->listaComentariosDAO($idZapatillas);
		$coments = array();
		if ($result != NULL){
			for ($i = 0; $i < count($result); $i++){
				array_push($coments, $daoComentario->buscaComentarioDAO($result[$i]));			
			}
		}
		return $coments;
	}

}
?>