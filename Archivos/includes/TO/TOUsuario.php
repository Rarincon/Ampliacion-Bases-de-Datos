<?php

class TOUsuario{
	
	private $id;
	private $nombre;
	private $contrasena;
	private $fecha;
	private $correo;
	private $tipo;
	
	public function __construct($idUsuario){
		$this->id = $idUsuario;
	}
	
	public function setIdUsuario($idUsuario){
		$this->id = $idUsuario;
	}
	
	public function setNombreUsuario($nombreUsuario){
		$this->nombre = $nombreUsuario;
	}
	
	public function setContrasenaUsuario($contrasenaUsuario){
		$this->contrasena = $contrasenaUsuario;
	}
		
	public function setFechaUsuario($fechaUsuario){
		$this->fecha = $fechaUsuario;
	}
		
	public function setCorreoUsuario ($correoUsuario){
		$this->correo = $correoUsuario;
	}
		
	public function setTipoUsuario($tipoUsuario){
		$this->tipo = $tipoUsuario;
	}
		
	public function getIdUsuario(){
		return $this->id;
	}
	
	public function getNombreUsuario(){
		return $this->nombre;
	}
	
	public function getContrasenaUsuario(){
		return $this->contrasena;
	}
	
	public function getFechaUsuario(){
		return $this->fecha;
	}
	
	public function getCorreoUsuario(){
		return $this->correo;
	}
	
	public function getTipoUsuario(){
		return $this->tipo;
	}
	
	public function compruebaPassword($password){
        return password_verify($password, $this->contrasena);
    }

}
?>