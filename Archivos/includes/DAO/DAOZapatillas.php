<?php

include_once('DAO.php');
require_once __DIR__.'/../TO/TOZapatillas.php';


class DAOZapatillas extends DAO {
		
	public function __construct() {
       parent::__construct();
    }
	
	public function buscaZapatillasDAO($nombreZapatillas) {
		$zapatillas = new TOZapatillas($nombreZapatillas);
		$query = "SELECT * FROM zapatillas WHERE Nombre = '$nombreZapatillas'";
		$rs = $this->ejecutarConsulta($query);
		if ($rs) {
			if (count($rs) == 1) {
				$zapatillas->setNombreZapatillas($rs[0]["Nombre"]);
				$zapatillas->setMarcaZapatillas($rs[0]["Marca"]);
				$zapatillas->setFechaLanzamientoZapatillas($rs[0]["FechaLanzamiento"]);
				$zapatillas->setPortadaPelicula($rs[0]["Portada"]);
            return $zapatillas;
			}
		}
		return null;
	}
	
	public function anadirZapatillasDAO($nombre, $marca, $fechaLanzamiento, $portada){
        $sql = "INSERT INTO zapatillas (Nombre, Marca, FechaLanzamiento, Portada)
		VALUES ('$nombre', '$marca', '$fechaLanzamiento', '$portada')";
        $this->ejecutarModificacion($sql);
 	}
	
	public function borrarZapatillasDAO($nombre){
        $sql = "DELETE From zapatillas WHERE Nombre= '$nombre'";
        $this->ejecutarModificacion($sql);
 	}
	
	public function listarZapatillasDAO(){
		$query = "SELECT * FROM zapatillas";
		$array = array();
		$rs = $this->ejecutarConsulta($query);
		if (count($rs) != 0) {
			for($i = 0; $i < count($rs); $i++ ){
                array_push( $array, $rs[$i]['Nombre']);
            }
			return $array;
		}
		else{
			return null;
		}
	}
	
}
?>