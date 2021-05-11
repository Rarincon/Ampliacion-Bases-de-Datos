<?php

require_once __DIR__.'/../DAO/DAOFavorito.php';


class SAFavorito {
	
	private static $daoFavorito;
	
	public static function buscaFavoritoSA($usuario,$zapas) { //SE usara mas adelante, no hara falta el evento
		$daoFavorito = new DAOFavorito(); 
		return $daoFavorito->buscaFavoritoDAO($usuario,$zapas);
	}
		
	public static function anadirFavoritoSA($usuario,$zapas){ 
		$daoFavorito = new DAOFavorito();
		$estaApuntado = $daoFavorito->buscaFavoritoDAO($usuario,$zapas);
		if ($estaApuntado) {
			return NULL; 
		}
		$daoFavorito->anadirFavoritoDAO($usuario,$zapas);
		return $estaApuntado;
	}
	
	public static function eliminarFavoritoSA($usuario,$zapas){ 
		$daoFavorito = new DAOFavorito();
		$estaApuntado = $daoFavorito->buscaFavoritoDAO($usuario,$zapas);
		if ($estaApuntado) {
			$daoFavorito->eliminarFavoritoDAO($usuario,$zapas);
		}
	}	
	
	public static function listarFavoritosSA(){
	$daoFavorito = new DAOFavorito();
	$result = $daoFavorito->listarFavoritosDAO($_SESSION["id"]);
	$eventos = array();
	if($result != NULL){
		for($i = 0; $i < count($result); $i++ ){
			array_push($eventos, /*$daoApuntado->buscaApuntarseDAO(*/$result[$i]/*)*/);
		}
	}
	return $eventos;
	}
	
	/*public static function listarUsuariosFavoritosSA($evento){
	$daoFavorito = new DAOApuntarse();
	$result = $daoFavorito->listarUsuariosApuntadosDAO($evento);
	$usuarios = array();
	if($result != NULL){
		for($i = 0; $i < count($result); $i++ ){
			array_push($usuarios, /*$daoApuntado->buscaApuntarseDAO($result[$i]));
		}
	}
	return $usuarios;
	}*/
}
?>