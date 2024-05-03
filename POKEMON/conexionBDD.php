<?php
$servername = "127.0.0.1";
$username = "root";
$pass = "";
$database = "pokedex";

$conn = mysqli_connect($servername, $username, $pass, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}