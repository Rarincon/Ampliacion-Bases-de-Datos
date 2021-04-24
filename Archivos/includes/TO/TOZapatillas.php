<?php 

class TOZapatillas {
	
		private $nombre;
		private $fechaLanzamiento;
		private $portada;
	
		public function __construct($nombreZapatillas){
			$this->nombre = $nombreZapatillas;
		}
	
		public function setNombreZapatillas($nombreZapatillas){
			$this->nombre = $nombreZapatillas;
		}
	
		public function setFechaLanzamientoZapatillas($fechaLanzamientoZapatillas){
			$this->fechaLanzamiento = $fechaLanzamientoZapatillas;
		}
		
		public function setPortadaZapatillas($portadaZapatillas){
			$this->portada = $portadaZapatillas;
		}
		
		public function getNombreZapatillas(){
			return $this->nombre;
		}
		
		public function getFechaLanzamientoZapatillas(){
			return $this->fechaLanzamiento;
		}
	
		public function getPortadaZapatillas(){
			return $this->portada;
		}
		
}	
?>