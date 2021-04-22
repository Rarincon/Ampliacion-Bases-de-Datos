<?php

require_once __DIR__.'/formulario.php';
require_once __DIR__.'/SA/SAUsuario.php';
require_once __DIR__.'/TO/TOUsuario.php';


class FormularioRegistro extends Formulario{

    public function generaCamposFormulario($datosIniciales){
    	return '<fieldset>
					<legend> Datos del usuario </legend>
					<form method="post" action="procesarRegistro.php">
					<label> Id Usuario: </label>
					<input type="text" name="id">
					<label> Nombre: </label>
					<input type="text" name="nombre">
					<label> Fecha de nacimiento: </label>
					<input type="date" name="nacimiento">
					<label> Correo electrónico: </label>
					<input type="text" name="email">
					<label> Contraseña: </label>
					<input type="password" name="contrasena">
					<input type="submit" name="enviar" value="Enviar">
				</fieldset>';
	}

    public function procesaFormulario($datos){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$fn = $_POST['nacimiento'];
		$email = $_POST['email'];
		$contrasenia = $_POST['contrasena'];
		$contrasenia =  password_hash($contrasenia, PASSWORD_BCRYPT );
		SAUsuario::crea($id, $nombre, $fn, $email, $contrasenia, $tipo, $nivel);
    }
	
}
?>