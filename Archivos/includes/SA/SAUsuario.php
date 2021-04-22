<?php

require_once __DIR__.'/../DAO/DAOUsuario.php';


class SAUsuario{
    private static $daoUsuario;

    public static function login($idUsuario, $password) {
        $daoUsuario = new DAOUsuario();
        $user = $daoUsuario->buscaUsuarioDAO($idUsuario);
        if ($user && $user->compruebaPassword($password)) {
            return $user;
        }
        return NULL;
    }

    public static function buscaUsuarioSA($idUsuario) {
        $daoUsuario = new DAOUsuario();
        return $daoUsuario->buscaUsuarioDAO($idUsuario);
    }
    
    
    public static function crea($idUsuario, $nombre, $contrasena, $fecha, $correo, $tipo){
        $daoUsuario = new DAOUsuario();
        $user = $daoUsuario->buscaUsuarioDAO($idUsuario);
        if ($user) {
            return NULL;
        }
        $user = new TOUsuario($idUsuario, $nombre, hashPassword($contrasena), $fecha, $correo, $tipo);
        $daoUsuario->inserta($user);
        return $user;
    }

}
?>