<?php

include_once('DAO.php');
require_once __DIR__.'/../TO/TOMarca.php';


class DAOMarca extends DAO {
		
	public function __construct() {
       parent::__construct();
    }
	
	public function buscaMarcaDAO($nombre) {
		$marca = new TOMarca($nombre);
		$query = "SELECT * FROM marcas WHERE Nombre = '$nombre'";
		$rs = $this->ejecutarConsulta($query);
		if ($rs) {
			if (count($rs) == 1) {
				$marca->setNombre($rs[0]["Nombre"]);
				$marca->setMarca($rs[0]["Marca"]);
				$marca->setTipo($rs[0]["Tipo"]);
            return $marca;
			}
		}
		return null;
	}
	
	public function anadirMarcaDAO($marca, $nombre, $tipo){
        $sql = "INSERT INTO marcas (Nombre, Marca, Tipo)
		VALUES ('$nombre', '$marca', '$tipo')";
        $this->ejecutarModificacion($sql);
 	}
	
	public function borrarMarcaDAO($nombre){
        $sql = "DELETE From marcas WHERE Nombre= '$nombre'";
        $this->ejecutarModificacion($sql);
 	}
}
?>