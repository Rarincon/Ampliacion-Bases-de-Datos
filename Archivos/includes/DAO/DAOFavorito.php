<?php

include_once('DAO.php');
require_once __DIR__.'/../TO/TOFavorito.php';


class DAOFavorito extends DAO {
		
	public function __construct() {
       parent::__construct();
    }
	
	/*public function buscaApuntarseDAO($IdApuntado) {
		$apuntarse = new TOApuntarse();
		$query = "SELECT * FROM apuntadosevento  WHERE IdApuntado = '$IdApuntado'" ;
		$rs = $this->ejecutarConsulta($query);
		if ($rs) {
			if (count($rs) == 1) {
				$apuntarse->setIdUsuario($rs[0]["IdUsuario"]);
				$apuntarse->setIdEvento($rs[0]["IdEvento"]);
				return $apuntarse;
			}
		}
		return null;
	}*/
	
	public function buscaFavoritoDAO($idUsuario, $nombreZapas) {
		$query = "SELECT * FROM favoritos  WHERE IdZapatilla = '$nombreZapas' AND IdUsuario = '$idUsuario'";
		$rs = $this->ejecutarConsulta($query);
		if ($rs) {
			return true;
		}
		else return false;
	}
	
	public function anadirFavoritoDAO($usuario,$zapas){
        $sql = "INSERT INTO favoritos (IdUsuario, IdZapatilla)
		VALUES ('$usuario', '$zapas')";
        $this->ejecutarModificacion($sql);
 	}
	
	public function eliminarFavoritoDAO($usuario,$zapas){
        $sql = "DELETE FROM favoritos WHERE IdZapatilla = '$zapas' AND IdUsuario = '$usuario'";
        $this->ejecutarModificacion($sql);
 	}	
	
	public function listarFavoritosDAO($id){
		$query = "SELECT * FROM favoritos WHERE IdUsuario = '$id'";
		$array = array();
		$rs = $this->ejecutarConsulta($query);
		if (count($rs) != 0) {
			for($i = 0; $i < count($rs); $i++ ){
                array_push( $array, $rs[$i]['IdZapatilla']);
            }
			return $array;
		}
		else{
			return null;
		}
	}
}
?>