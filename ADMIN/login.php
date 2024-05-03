<?php
session_start();


if (isset($_POST["username"]) && isset($_POST["password"])) {
    $usuario = $_POST["username"];
    $password = $_POST["password"];
    $esValido = consultarBD($usuario,$password);

    if ($esValido) {
        $_SESSION["username"] = $usuario;
        header("Location: usuarioAdmin.php");
        exit();
    } else {
        header("Location:../index.php");
        exit();
    }
}else {
    echo "Error";
    exit();
}
function cconsultarBD($usuario, $password)
{
    global $conn;
    include_once ("../POKEMON/conexionBDD.php");

    //Consulta
    $sql = "SELECT * FROM `login` WHERE nombreUsuario = '$usuario' AND passUsuario = '$password'";

    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) == 1;
    /*devuelve el número de filas en el resultado del conjunto de resultados $result.
    Si devuelve 1, significa que se encontró una coincidencia y la función devuelve true.
    Si devuelve 0 o más de 1, significa que no se encontró ninguna coincidencia o se
    encontraron múltiples coincidencias, respectivamente, y la función devuelve false*/

}

function devolverNombre(){

}
{

}