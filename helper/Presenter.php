<?php

class Presenter
{

    public function __construct()
    {
    }

    public function render($view, $data = [])
    {
        include_once("view/template/headerUsuarioAdmin.php");
        include_once($view);

    }
}