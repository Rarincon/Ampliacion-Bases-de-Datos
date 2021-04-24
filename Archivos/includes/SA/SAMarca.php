<?php

require_once __DIR__.'/../DAO/DAOMarca.php';


class SAMarca {
	
	private static $daoMarca;
	
	public static function buscaMarcaSA($nombreMarca) {
		$daoMarca = new DAOMarca();
		return $daoMarca->buscaMarcaDAO($nombreMarca);
	}
		
	public static function anadirMarcaSA($nombre,$marca, $tipo){
		$daoMarca = new DAOMarca();
		$existeMarca = $daoMarca->buscaMarcaDAO($nombre);
		if ($existeMarca) {
			return NULL; 
		}
		$daoMarca->anadirMarcaDAO($nombre, $marca, $tipo);
		return $existeMarca;
	}
		
	public static function borrarMarcaSA($nombre){
		$daoMarca = new DAOMarca();
		$existeMarca = $daoMarca->buscaMarcaDAO($nombre);
		if (!$existeMarca) {
			return NULL; 
		}
		$daoMarca->borrarMarcaDAO($nombre);
		return $existeMarca;
	}
}
?>