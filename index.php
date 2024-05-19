<?php
include_once ("Configuracion.php");




$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? 'get';

$router =configuration::getRouter();
$router->route($controller,$action);
?>



<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Pokedex/CSS/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <a class="navbar-brand" href="#">

            <img src="img/pokemon_PNG85.png" alt="Imagen" class="header-img">
        </a>


        <div class="title">
            <h1 class="text-center">POKEDEX</h1>
        </div>


        <div id="loginForm" class="ml-auto">
            <form action="ADMIN/login.php" method="post" class="form-inline">
                <input type="text" class="form-control mr-2" name="username" placeholder="Usuario" required>
                <input type="password" class="form-control mr-2" name="password" placeholder="Contraseña" required>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="search-container">
        <div class="search-bar"><br>
            <form class="form-inline" method="post" action="POKEMON/buscarPokemon.php">
                <input type="text" class="form-control flex-grow-1 mr-2" name="searchInput" placeholder="Ingrese nombre, tipo o número de Pokémon">
                <button type="submit" class="btn btn-primary" name="buscar">Buscar</button>
            </form>
        </div>
        <div id="searchResults" class="mt-4">
            <?php
            include_once ("POKEMON/vista.php");
            ?>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
-->










