<?php 

class TOMarca {
	
		private $nombre;
		private $marca;
		private $tipo;
	
		public function __construct($nombreZapatillas){
			$this->nombre = $nombreZapatillas;
		}
	
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
	
		public function setMarca($marca){
			$this->marca = $marca;
		}
		
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function getMarca(){
			return $this->estreno;
		}
		
		public function getTipo(){
			return $this->tipo;
		}
}	
?>