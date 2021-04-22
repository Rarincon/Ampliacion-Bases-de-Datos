<?php

require_once __DIR__.'/../DAO/DAOComentario.php';


class SAComentario {
	
	private static $daoComentario;
	
		/*public static function buscaComentarioSA($nombreZapatillas) {
		$daoComentario = new DAOComentario();
		return $daoComentario->buscaComentarioDAO($nombreZapatillas);
		}
		*/
		
	public static function anadirComentarioSA($nombre,$fecha, $comentario, $zapas){
		
		$daoComentario = new DAOComentario();
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