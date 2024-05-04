<?php
include_once ("../headerUsuarioAdmin.php")
?>

<div>
    <button onclick="history.back()" class="btn btn-primary mt-3">Volver atrás</button>
</div>

<div class="container mt-5">
    <div class="search-container">
        <div class="search-bar">
            <form class="form-inline" method="post" action="../POKEMON/buscarPokemon.php">
                <input type="text" class="form-control flex-grow-1 mr-2" name="searchInput"
                       placeholder="Ingrese nombre, tipo o número de Pokémon">
                <button type="submit" class="btn btn-primary" name="buscar">Buscar</button>
            </form>
        </div>
        <div id="searchResults" class="mt-4">
            <?php
            include_once("../POKEMON/VistaConBajaModificacion.php");
            ?>
            <!-- Aquí se mostrarán los resultados de la búsqueda -->
        </div>
    </div>
</div>

<footer class="bottom text-center bg-light p-3">
    <a href="../POKEMON/agregarPokemon.php" class="btn btn-primary">Nuevo Pokémon</a>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>











