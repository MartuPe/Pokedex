<?php

class UsuarioModel
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function usuarioLogeado($usuario, $password)
    {
        return $this->database->query("SELECT * FROM `login` WHERE nombreUsuario = '$usuario' AND passUsuario = '$password'");

    }

}