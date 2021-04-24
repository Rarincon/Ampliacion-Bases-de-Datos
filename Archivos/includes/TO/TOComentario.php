<?php

class TOComentario{
	
		private $id;
		private $nombre;
		private $fecha;
		private $comentario;
		private $idZapatillas;

		public function __construct(){}
		
		public function setIdComent($idUser){
			$this->id = $idUser;
		}
		
		public function getIdComent($idComent){
			return this->$id;
		}

		public function setIdUsuario($usuario){
			$this->nombre = $usuario;
		}
		public function getIdUsuario(){
			return $this->nombre;
		}

		public function setIdZapatillas($zapatillas){
			$this->idZapatillas = $zapatillas;
		}
		public function getIdZapatillas(){
			return $this->idZapatillas;
		}
		
		public function setFecha($fech){
			$this->fecha = $fech;
		}
		public function getFecha(){
			return $this->fecha;
		}
		
		public function setComentario($comenta){
			$this->comentario = $comenta;
		}
		public function getComentario(){
			return $this->comentario;
		}
	
}
?>