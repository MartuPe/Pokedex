<?php
global $conn;
include_once("conexionBDD.php");

if (isset($_GET["id"])) {
    $pokemonId = $_GET["id"];

    $sql = "DELETE FROM apiPokemon WHERE Id = $pokemonId";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>El Pokémon ha sido eliminado exitosamente.</div>";
        echo "<a href='../ADMIN/usuarioAdmin.php' class='btn btn-primary'>Volver</a>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Ocurrió un error al intentar eliminar el Pokémon.</div>";
    }
}


