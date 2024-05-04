<?php
include_once("conexionBDD.php");

$pokemonId = $_GET["id"];
if(isset($_FILES['imgPokemon']) || isset($_FILES['imgTipo']) || isset($_POST['numeroPokemon']) || isset($_POST['nombrePokemon']) || isset($_POST['descripcionPokemon']) || isset($_POST['tipoPokemon'])){
    $numeroPokemon = $_POST['numeroPokemon'];
    $nombrePokemon = $_POST['nombrePokemon'];
    $nombreTipoPokemon = $_POST['nombreTipoPokemon'];
    $descripcionPokemon = $_POST['descripcionPokemon'];
    $tipoPokemon = $_POST['nombreTipoPokemon'];
    $imagenPokemon = $_FILES['imgPokemon']['name'];
    $imagenTipoPokemon = $_FILES['imgTipo']['name'];

    echo $nombrePokemon;
    echo $imagenPokemon == "";
    $sql = "";
    if ($imagenPokemon != "") {
        $carpetaArchivo = "../img/" . $imagenPokemon;
        $sql ="UPDATE `apipokemon` SET `imagenPokemon` = '$imagenPokemon' WHERE `id` = '$pokemonId'";
        mysqli_query($conn, $sql);
    }if ($imagenTipoPokemon != ""){
        $carpetaArchivo = "../img/" . $imagenTipoPokemon;
        $sql ="UPDATE `apipokemon` SET `imagenTipo` = '$imagenTipoPokemon' WHERE `id` = '$pokemonId'";
        mysqli_query($conn, $sql);
    }
    $sql ="UPDATE `apipokemon` SET `nombre` = '$nombrePokemon', `numero` = '$numeroPokemon', `descripcion` = '$descripcionPokemon', `tipo` = '$tipoPokemon' WHERE `id` = '$pokemonId'";
    mysqli_query($conn, $sql);
    header("Location: ./modificarPokemon.php?id=$pokemonId");
    exit();

}
