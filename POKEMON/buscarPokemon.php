<?php
include_once("conexionBDD.php");

// Verificar si se ha enviado el formulario de búsqueda
if (isset($_POST["buscar"])) {
    // Obtener el término de búsqueda del formulario
    $terminoBuscado = $_POST["searchInput"];

    // Consulta SQL para buscar el Pokémon por nombre, tipo o número
    $sql = "SELECT * FROM apiPokemon WHERE nombre LIKE '%$terminoBuscado%' OR tipo LIKE '%$terminoBuscado%' OR numero = '$terminoBuscado'";

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        // Mostrar los resultados de la búsqueda
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
        }
        echo "</table>";
    } else {
        // Mostrar mensaje de "Pokemon no encontrado"
        echo "<div class='alert alert-warning mt-3' role='alert'>Pokemon no encontrado.</div>";
    }
}
?>
