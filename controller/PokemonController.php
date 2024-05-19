<?php

class PokemonController
{
    private $model;
    private $presenter;

    public function __construct($model, $presenter){
        $this->model = $model;
        $this->presenter = $presenter;
    }

    public function get(){
        $pokemons = $this->model->getPokemons();
        $this->presenter->render("view/inicioView.mustache", ["pokemons" => $pokemons]);
    }
}