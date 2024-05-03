<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        .container-main {
            margin-bottom: 200px; /* Ajusta este valor según sea necesario */
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <!-- Logo e imagen -->
        <a class="navbar-brand" href="#">
            <img src="../img/pokemon_PNG85.png" alt="Imagen" class="header-img">
        </a>

        <!-- Título -->
        <div class="title">
            <h1 class="text-center">POKEDEX</h1>
        </div>

        <!-- Formulario de inicio de sesión -->
        <div id="loginForm" class="ml-auto">
            <?php
            session_start();
            if (isset($_SESSION["username"])) {
                echo "<p class='text-white' style='font-size: 23px; margin-bottom: 0;'> Bienvenido, " . $_SESSION["username"] . "</p>";
            }
            ?>
        </div>
    </div>
</nav>

<div class="container container-main">
    <!-- Contenido principal aquí -->
</div>

<!-- Tu otro código aquí -->

</body>
</html>
