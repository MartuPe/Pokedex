<?php
include_once("conexionBDD.php");
include_once("../headerUsuarioAdmin.php");

if (isset($_GET["id"])) {

    $pokemonId = $_GET["id"];

    $sql = "SELECT * FROM apiPokemon WHERE Id = $pokemonId";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);

        $imagenPokemon = $fila["imagenPokemon"]; // Ruta de la imagen

        echo "<img src='" . $imagenPokemon . "' width='100' height='100'>";
        echo "<p>" . $fila["descripcion"] . "</p>";

    } else {
        echo "No se encontró ningún Pokémon con el ID proporcionado.";
    }
}

