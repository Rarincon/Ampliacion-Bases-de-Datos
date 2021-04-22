<?php

require_once __DIR__.'/formulario.php';


class FormularioLogin extends Formulario{

 	public function generaCamposFormulario(){
		return '<fieldset>
					<legend> Datos del usuario </legend>
					<form method="post" action="procesarLogin.php">
					<label> Nombre: </label>
					<input type="text" name="nombre">
					<label> Contraseña: </label>
					<input type="password" name="contrasena">
					<input type="submit" name="enviar" value="Enviar">
				</fieldset>';
			
 	}

 	public function procesaFormulario(){
        $username = htmlspecialchars(trim(strip_tags($_POST["nombre"])));
		$password = htmlspecialchars(trim(strip_tags($_POST["contrasena"])));
		$logueado = SAUsuario::login($username, $password);
		if($logueado != null){
			$_SESSION["id"] = $username;
			$_SESSION["login"] = true;
		}
		else{
			$_SESSION["login"] = false;	
		}
    }
	
}
?>