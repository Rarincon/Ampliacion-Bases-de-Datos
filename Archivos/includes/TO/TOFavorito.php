<?php

class TOFavorito{
	
	private $idusuario;
	private $idzapatilla;

	public function __construct(){}

	public function setIdUsuario($usuario){
		$this->idusuario = $usuario;
	}
	public function getIdUsuario(){
		return $this->idusuario;
	}
	
	public function setIdZapatilla($zapas){
		$this->idzapatilla = $zapas;
	}
	public function getIdZapatilla(){
		return $this->idzapatilla;
	}
	
}
?>