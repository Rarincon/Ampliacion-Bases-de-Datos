<?php

include_once('DAO.php');
require_once __DIR__.'/../TO/TOUsuario.php';


class DAOUsuario extends DAO {
		
	public function __construct() {
       parent::__construct();
    }
	
	public function buscaUsuarioDAO($idUsuario) {
		$usuario = new TOUsuario($idUsuario);
		$query = "SELECT * FROM usuarios  WHERE Id = '$idUsuario'";
		$rs = $this->ejecutarConsulta($query);
		if ($rs) {
			if (count($rs) == 1) {
				$usuario->setIdUsuario($rs[0]["Id"]);
				$usuario->setNombreUsuario($rs[0]["Nombre"]);
				$usuario->setContrasenaUsuario($rs[0]["Contrasenia"]);
				$usuario->setFechaUsuario($rs[0]["FechaNacimiento"]);
				$usuario->setCorreoUsuario($rs[0]["Correo"]);
				$usuario->setTipoUsuario($rs[0]["Tipo"]);
				if($usuario->getTipoUsuario()== "admin"){
					$_SESSION["admin"] = true; 
				}
				else{
					$_SESSION["admin"] = false;
				}
            return $usuario;
			}
		}
		return null;
	}
	
	public function anadirUsuarioDAO($id, $nombre, $contrasena, $fecha, $correo, $tipo){
        $sql = "INSERT INTO usuarios (Id, Nombre, Contrasenia, Fecha, Coreo, Tipo)
		VALUES ('$id', '$nombre', '$contrasena', '$fecha', '$correo', '$tipo')";
        $this->ejecutarModificacion($sql);
 	}
	
}
?>