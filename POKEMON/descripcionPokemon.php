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

        echo "<div class='container mt-5'>";
        echo "<div class='row'>";
        echo "<div class='col-md-6'>";
        echo "<img src='" . $imagenPokemon . "' class='img-fluid img-pequena' alt='Imagen de Pokémon'>";
        echo "</div>";
        echo "<div class='col-md-6 text-justify'>";
        echo "<p style='font-family: Comic Sans MS;'>" . $fila["descripcion"] . "</p>";
        echo "</div>";
        echo "</div>"; // Cierre de la fila
        echo "</div>"; // Cierre del contenedor
    } else {
        echo "No se encontró ningún Pokémon con el ID proporcionado.";
    }
}
?>
<button onclick="history.back()" class="btn btn-primary ml-3 mb-3">Volver atrás</button>
<style>
    .img-pequena {
        max-width: 200px; /* Puedes ajustar este valor según tus necesidades */
    }

</style>