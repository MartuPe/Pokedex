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

    public function buscarPokemon($palabraBuscada = ""){
        $sql = "SELECT * FROM apipokemon WHERE tipo = '$palabraBuscada'  OR 
                nombre = '$palabraBuscada' OR numero = '$palabraBuscada'";

        return $this->database->query($sql);
    }
}