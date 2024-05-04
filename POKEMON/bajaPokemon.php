<?php
include_once("conexionBDD.php");

if (isset($_GET["id"])) {
    $pokemonId = $_GET["id"];

    $sql = "DELETE FROM apiPokemon WHERE Id = $pokemonId";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>El Pokémon ha sido eliminado exitosamente.</div>";

    } else {
        echo "<div class='alert alert-danger' role='alert'>Ocurrió un error al intentar eliminar el Pokémon.</div>";
    }
}
?>
<button onclick="history.back()" class="btn btn-primary ml-3 mb-3">Volver atrás</button>

