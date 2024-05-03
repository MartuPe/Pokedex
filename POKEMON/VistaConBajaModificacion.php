<?php

include_once("conexionBDD.php");

$sql = "SELECT * FROM apipokemon";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='background-color: #f2f2f2;'>";
    echo "<th style='border: 1px solid #ddd; padding: 8px;'>Imagen pokemon</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px;'>Imagen tipo</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px;'>Numero</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px;'>Nombre</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px;'>Tipo</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px;'>Acciones</th>"; // Nueva columna para acciones
    echo "</tr>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr style='background-color: #fff;'>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'><img src='" . $fila["imagenPokemon"] . "' width='100' height='100'></td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'><img src='" . $fila["imagenTipo"] . "' width='100' height='100'></td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila["numero"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila["nombre"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila["tipo"] . "</td>";
        // Botones de acción para cada Pokémon
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>";
        echo "<a href='bajaPokemon.php?id=" . $fila["Id"] . "' class='btn btn-danger'>Baja</a>"; // Enlace para la baja
        echo "<a href='modificarPokemon.php?id=" . $fila["Id"] . "' class='btn btn-warning ml-2'>Modificar</a>"; // Enlace para modificar
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}
