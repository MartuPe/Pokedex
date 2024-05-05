<?php
include_once ("../headerUsuarioAdmin.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Pokémon</title>

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
            <h2 class="mb-4">Agregar Pokémon</h2>
            <form action="subirArchivosAbdd.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="imgPokemon">Imagen de Pokémon:</label>
                    <input type="file" class="form-control-file" id="imgPokemon" name="imgPokemon">
                </div>
                <div class="form-group">
                    <label for="imgTipo">Imagen de Tipo de Pokémon:</label>
                    <input type="file" class="form-control-file" id="imgTipo" name="imgTipo">
                </div>
                <div class="form-group">
                    <label for="numeroPokemon">Número de Pokémon:</label>
                    <input type="number" class="form-control" id="numeroPokemon" name="numeroPokemon">
                </div>
                <div class="form-group">
                    <label for="nombrePokemon">Nombre de Pokémon:</label>
                    <input type="text" class="form-control" id="nombrePokemon" name="nombrePokemon">
                </div>
                <div class="form-group">
                    <label for="descripcionPokemon">Descripcion del pokemon:</label>
                    <input type="text" class="form-control" id="descripcionPokemon" name="descripcionPokemon">
                </div>
                <div class="form-group">
                    <label for="nombreTipoPokemon">Nombre de Tipo de Pokémon:</label>
                    <input type="text" class="form-control" id="nombreTipoPokemon" name="nombreTipoPokemon">
                </div>
                <button type="submit" class="btn btn-primary">Agregar Pokémon</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
