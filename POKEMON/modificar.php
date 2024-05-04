<?php
include_once("conexionBDD.php");

if (isset($_GET["id"]) && isset($_POST["numeroPokemon"]) && isset($_POST["nombrePokemon"]) && isset($_POST["descripcionPokemon"]) && isset($_POST["nombreTipoPokemon"])) {
    $pokemonId = $_GET["id"];
    $numeroPokemon = $_POST["numeroPokemon"];
    $nombrePokemon = $_POST["nombrePokemon"];
    $descripcionPokemon = $_POST["descripcionPokemon"];
    $nombreTipoPokemon = $_POST["nombreTipoPokemon"];

    if (isset($_FILES["imagenPokemon"]["tmp_name"]) && isset($_FILES["imagenTipo"]["tmp_name"])) {
        $imagenPokemon = $_FILES["imagenPokemon"]["tmp_name"];
        $imagenTipo = $_FILES["imagenTipo"]["tmp_name"];

        $rutaImagenPokemon = "../img/pokemon_$pokemonId.jpg"; // Cambia el nombre del archivo según sea necesario
        $rutaImagenTipo = "../img/tipo_$pokemonId.jpg"; // Cambia el nombre del archivo según sea necesario
        move_uploaded_file($imagenPokemon, $rutaImagenPokemon);
        move_uploaded_file($imagenTipo, $rutaImagenTipo);

        $sql = "UPDATE apipokemon SET imagenPokemon = '$rutaImagenPokemon', imagenTipo = '$rutaImagenTipo' WHERE Id = $pokemonId";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>Las imágenes se han actualizado correctamente.</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Error al actualizar las imágenes.</div>";
        }
    }

    $sql = "UPDATE apipokemon SET numero = '$numeroPokemon', nombre = '$nombrePokemon', descripcion = '$descripcionPokemon', tipo = '$nombreTipoPokemon' WHERE Id = $pokemonId";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        header("Location: ../ADMIN/usuarioAdmin.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error al guardar los cambios.</div>";
    }
} else {
    echo "No se han proporcionado todos los datos necesarios.";
}
?>
