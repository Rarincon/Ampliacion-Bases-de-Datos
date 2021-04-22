<?php

require_once __DIR__.'/../DAO/DAOZapatillas.php';


class SAZapatillas {
	
	private static $daoZapatillas;
	
	public static function buscaZapatillasSA($nombreZapatilla) {
		$daoZapatilla = new DAOZapatilla();
		return $daoZapatilla->buscaZapatillaDAO($nombreZapatilla);
	}
		
	public static function anadirZapatillasSA($nombre,$marca, $fechaLanzamiento, $portada){
		$daoZapatillas = new DAOZapatillas();
		$existeZapatillas = $daoZapatillas->buscaZapatillasDAO($nombre);
		if ($existeZapatillas) {
			return NULL; 
		}
		$daoPZapatillas->anadirZapatillasDAO($nombre,$marca, $fechaLanzamiento, $portada);
		return $existeZapatillas;
	}
		
	public static function borrarZapatillasSA($nombre){
		$daoZapatillas = new DAOZapatillas();
		$existeZapatillas = $daoZapatillas->buscaZapatillasDAO($nombre);
		if (!$existeZapatillas) {
			return NULL; 
		}
		$daoZapatillas->borrarZapatillasDAO($nombre);
		return $existeZapatillas;
	}
		
	public static function listarZapatillasSA(){
		$daoZapatillas = new DAOZapatillas();
		$result = $daoZapatillas->listarZapatillasDAO();
		$zapatillas = array();
		if($result != NULL){
			for($i = 0; $i < count($result); $i++ ){
				array_push($zapatillas, $daoZapatillas->buscaZapatillasDAO($result[$i]));
			}
		}
		return $zapatillas;
	}
    
}
?>