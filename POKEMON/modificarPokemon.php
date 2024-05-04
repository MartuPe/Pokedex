<?php
include_once("conexionBDD.php");

if (isset($_GET["id"])) {
    $pokemonId = $_GET["id"];

    // Obtener los datos del Pokémon seleccionado
    $sql = "SELECT * FROM apipokemon WHERE Id = $pokemonId";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);

        // Rellenar el formulario con los datos del Pokémon
        $numeroPokemon = $fila["numero"];
        $nombrePokemon = $fila["nombre"];
        $descripcionPokemon = $fila["descripcion"];
        $nombreTipoPokemon = $fila["tipo"];
        $imagenPokemon = $fila["imagenPokemon"];
        $imagenTipo = $fila["imagenTipo"];

        // Mostrar el formulario con los datos del Pokémon
        ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="mb-4 text-center">Modificar Pokémon</h2>
                    <form action="modificar.php?id=<?php echo $pokemonId; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="numeroPokemon" class="col-sm-4 col-form-label">Número de Pokémon:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="numeroPokemon" name="numeroPokemon" value="<?php echo $numeroPokemon; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombrePokemon" class="col-sm-4 col-form-label">Nombre de Pokémon:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nombrePokemon" name="nombrePokemon" value="<?php echo $nombrePokemon; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcionPokemon" class="col-sm-4 col-form-label">Descripción del Pokémon:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="descripcionPokemon" name="descripcionPokemon" value="<?php echo $descripcionPokemon; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombreTipoPokemon" class="col-sm-4 col-form-label">Nombre de Tipo de Pokémon:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nombreTipoPokemon" name="nombreTipoPokemon" value="<?php echo $nombreTipoPokemon; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="imagenPokemon" class="col-sm-4 col-form-label">Imagen de Pokémon:</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" id="imagenPokemon" name="imagenPokemon">
                                <img src="<?php echo $imagenPokemon; ?>" alt="Imagen actual del Pokémon" class="img-thumbnail mt-2" style="max-width: 150px;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="imagenTipo" class="col-sm-4 col-form-label">Imagen de Tipo de Pokémon:</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" id="imagenTipo" name="imagenTipo">
                                <img src="<?php echo $imagenTipo; ?>" alt="Imagen actual del Tipo de Pokémon" class="img-thumbnail mt-2" style="max-width: 150px;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "No se encontró ningún Pokémon con el ID proporcionado.";
    }
}
?>
