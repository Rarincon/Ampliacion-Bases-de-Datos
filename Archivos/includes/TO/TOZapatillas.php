<?php 

class TOPelicula {
	
		private $nombre;
		private $marca;
		private $fechaLanzamiento;
		private $portada;
	
		public function __construct($nombreZapatillas){
			$this->nombre = $nombreZapatillas;
		}
	
		public function setNombreZapatillas($nombreZapatillas){
			$this->nombre = $nombreZapatillas;
		}
	
		public function setMarcaZapatillas($marcaZapatillas){
			$this->marca = $marcaZapatillas;
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
		
		public function getMarcaZapatillas(){
			return $this->estreno;
		}
		
		public function getFechaLanzamientoZapatillas(){
			return $this->genero;
		}
	
		public function getPortadaZapatillas(){
			return $this->portada;
		}
		
}	
?>