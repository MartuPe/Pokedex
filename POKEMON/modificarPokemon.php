<?php
include_once ("../headerUsuarioAdmin.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Pokémon</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            margin-bottom: 100px; /* Ajusta este valor según sea necesario */
        }
    </style>
</head>
<body>

<div class="container mt-5 form-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Modificar Pokémon</h2>
            <?php
            include_once("conexionBDD.php");
            if (isset($_GET["id"])) {

            $pokemonId = $_GET["id"];

            $sql = "SELECT * FROM apiPokemon WHERE Id = $pokemonId";
            $resultado = mysqli_query($conn, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                $fila = mysqli_fetch_assoc($resultado);
            }}
            $imagenPokemon = $fila["imagenPokemon"];
            $imagenTipo = $fila["imagenTipo"];
            $numeroPokemon = $fila["numero"];
            $nombrePokemon = $fila["nombre"];
            $descripcionPokemon = $fila["descripcion"];
            $tipoPokemon = $fila["tipo"];

            echo"<form action='modificarPokemonBD.php?id=" . $pokemonId . "' method='post' enctype='multipart/form-data'>
                
                 <div class='form-group'>
                     <img src='" . $imagenPokemon . "' width='100' height='100'>
                     <label for='imgPokemon'>Imagen de Pokémon:</label>
                    <input type='file' class='form-control-file' id='imgPokemon' name='imgPokemon'></div>

                <div class='form-group'>
                    <img src='" . $imagenTipo . "' width='100' height='100'>
                    <label for='imgTipo'>Imagen de Tipo de Pokémon:</label>
                    <input type='file' class='form-control-file' id='imgTipo' name='imgTipo'>
                </div>
                <div class='form-group'>
                    <label for='numeroPokemon'>Número de Pokémon:</label>
                    <input type='number' class='form-control' id='numeroPokemon' name='numeroPokemon' value='$numeroPokemon'>
                </div>
                <div class='form-group'>
                    <label for='nombrePokemon'>Nombre de Pokémon:</label>
                    <input type='text' class='form-control' id='nombrePokemon' name='nombrePokemon' value='$nombrePokemon'>
                </div>
                <div class='form-group'>
                    <label for='descripcionPokemon'>Descripcion del pokemon:</label>
                    <input type='text' class='form-control' id='descripcionPokemon' name='descripcionPokemon' value='$descripcionPokemon'>
                </div>
                <div class='form-group'>
                    <label for='nombreTipoPokemon'>Nombre de Tipo de Pokémon:</label>
                    <input type='text' class='form-control' id='nombreTipoPokemon' name='nombreTipoPokemon' value='$tipoPokemon'>
                </div>";
                ?>
                <button type="submit" class="btn btn-primary">Modificar Pokémon</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

