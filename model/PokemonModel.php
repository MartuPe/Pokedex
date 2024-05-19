<?php
class PokemonModel {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function getPokemons()
    {
        return $this->database->query("SELECT * FROM `apipokemon`");
    }
}