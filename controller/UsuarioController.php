<?php
session_start();
class UsuarioController
{
    private $model;
    private $presenter;

    public function __construct($model, $presenter){
        $this->model = $model;
        $this->presenter = $presenter;
    }

    public function login()
    {

        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $usuario = $_POST["username"];
            $password = $_POST["password"];
            $esValido = $this->model->usuarioLogeado($usuario, $password);
            echo ("primer if");
            if (count($esValido) == 1) {
                echo ("segundo if");
                $_SESSION["username"] = $usuario;
                $this->presenter->render("Pokedex/ADMIN/usuarioAdmin.php", ["usuario" => $usuario]);

            } else {
                $this->presenter->render("Pokedex/view/inicioView.mustache");
            }
        } else {
            echo "Error";
        }
        exit();
    }

}
