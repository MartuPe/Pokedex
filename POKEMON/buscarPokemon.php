<?php
include_once("conexionBDD.php");
include_once("../headerUsuarioAdmin.php");

$pokemonEncontrado = false;
if (isset($_POST["buscar"])) {

    $terminoBuscado = $_POST["searchInput"];

    $sql = "SELECT * FROM apiPokemon WHERE nombre LIKE '%$terminoBuscado%' OR tipo LIKE '%$terminoBuscado%' OR numero = '$terminoBuscado'";

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        echo "<table style='border-collapse: collapse; width: 100%;'>";
        echo "<tr style='background-color: #f2f2f2;'>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Imagen pokemon</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Imagen tipo</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Numero</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Nombre</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Tipo</th>";
        echo "</tr>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr style='background-color: #fff;'>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'><img src='" . $fila["imagenPokemon"] . "' width='100' height='100'></td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'><img src='" . $fila["imagenTipo"] . "' width='100' height='100'></td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila["numero"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila["nombre"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila["tipo"] . "</td>";
            echo "</tr>";
            $pokemonEncontrado = true;
        }
        echo "</table>";
    } else {
        echo "<div class='alert alert-warning mt-3' role='alert'>Pokémon no encontrado.</div>";
    }
}

if (!$pokemonEncontrado) {
    $sql_todos = "SELECT * FROM apiPokemon";
    $resultado_todos = mysqli_query($conn, $sql_todos);

    if (mysqli_num_rows($resultado_todos) > 0) {
        echo "<h3>Todos los Pokémon:</h3>";
        echo "<table style='border-collapse: collapse; width: 100%;'>";
        echo "<tr style='background-color: #f2f2f2;'>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Imagen pokemon</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Imagen tipo</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Numero</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Nombre</th>";
        echo "<th style='border: 1px solid #ddd; padding: 8px;'>Tipo</th>";
        echo "</tr>";
        while ($fila_todos = mysqli_fetch_assoc($resultado_todos)) {
            echo "<tr style='background-color: #fff;'>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'><img src='" . $fila_todos["imagenPokemon"] . "' width='100' height='100'></td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'><img src='" . $fila_todos["imagenTipo"] . "' width='100' height='100'></td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila_todos["numero"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila_todos["nombre"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila_todos["tipo"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        // Mostrar mensaje de "No hay Pokémon en la base de datos"
        echo "<div class='alert alert-warning mt-3' role='alert'>No hay Pokémon en la base de datos.</div>";
    }
}
?>
<button onclick="history.back()" class="btn btn-primary ml-3 mb-3">Volver atrás</button>

