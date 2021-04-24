<?php

require_once __DIR__.'/formulario.php';
require_once __DIR__.'/SA/SAUsuario.php';


class FormularioRegistro extends Formulario{

    public function generaCamposFormulario(){
    	return '<fieldset>
					<legend> Datos del usuario </legend>
					<form method="post" action="procesarRegistro.php">
					Id Usuario: <br> <input type="text" name="id"> </br>
					Nombre: <br><input type="text" name="nombre"></br>
					Fecha de nacimiento: <br><input type="date" name="nacimiento"></br>
					Correo electrónico:<br>	<input type="text" name="email"> </br>
					Contraseña: <br><input type="password" name="contrasena"></br>
					<input type="submit" name="enviar" value="Enviar">
				</fieldset>';
	}

    public function procesaFormulario(){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$fn = $_POST['nacimiento'];
		$email = $_POST['email'];
		$contrasenia = $_POST['contrasena'];
		$contrasenia =  password_hash($contrasenia, PASSWORD_BCRYPT );
		SAUsuario::crea($id, $nombre, $fn, $email, $contrasenia, 'user');
    }
	
}
?>