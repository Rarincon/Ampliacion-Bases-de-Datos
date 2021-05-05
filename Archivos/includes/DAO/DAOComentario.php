<?php

include_once('DAO.php');
require_once __DIR__.'/../TO/TOComentario.php';


class DAOComentario extends DAO {
		
	public function __construct() {
       parent::__construct();
    }
	
	public function buscaComentarioDAO($Idcoment) {
		$coment = new TOComentario();
		$query = "SELECT * FROM comentarios WHERE IdComentario = '$Idcoment'";
		$rs = $this->ejecutarConsulta($query);
		if ($rs) {
			if (count($rs) == 1) {				
				$coment->setIdUsuario($rs[0]["IdUsuario"]);
				$coment->setFecha($rs[0]["Fecha"]);
				$coment->setComentario($rs[0]["Comentario"]);
				$coment->setIdZapatillas($rs[0]["IdZapatillas"]);
				$coment->setIdComent($rs[0]["IdComentario"]);
				return $coment;
			}
		}
		return null;
	}
	
	public function buscaComentarioPersDAO($Idnombre) {
		$coment = new TOComentario();
		$query = "SELECT * FROM comentarios WHERE IdUsuario = '$Idnombre'";
		$rs = $this->ejecutarConsulta($query);
		if ($rs) {
			if (count($rs) == 1) {				
				return true;
			}else return false;
		}
		return false;
	}
	
	public function anadirComentarioDAO($nombre,$fecha, $comentario, $zapatillas){
		$sql = "INSERT INTO comentarios (IdUsuario, Fecha, Comentario, IdZapatillas)
		VALUES ('$nombre', '$fecha', '$comentario', '$zapatillas')";
		
        $this->ejecutarModificacion($sql);
 	}
	
	public function actualizaComentarioDAO($nombre,$fecha, $comentario, $zapatillas){
		$sql = "UPDATE comentarios SET Comentario = '$comentario' WHERE IdUsuario = '$nombre' AND IdZapatillas = '$zapatillas'";
		
        $this->ejecutarModificacion($sql);
 	}
	
	public function listaComentariosDAO($nombreZapatillas){
		$query = "SELECT * FROM comentarios WHERE (IdZapatillas = '$nombreZapatillas')";
		$array = array();
		$rs = $this->ejecutarConsulta($query);
		if (count($rs) != 0) {
			for($i = 0; $i < count($rs); $i++ ){
                array_push( $array, $rs[$i]['IdComentario']);
            }
			return $array;
		}
		else{
			return null;
		}
	}
	
}
?>