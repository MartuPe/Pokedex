<?php

if(isset($_FILES['imgPokemon']) && isset($_FILES['imgTipo'])){

    $numeroPokemon = $_POST['numeroPokemon'];
    $nombrePokemon = $_POST['nombrePokemon'];
    $nombreTipoPokemon = $_POST['nombreTipoPokemon'];
    $descripcionPokemon = $_POST['descripcionPokemon'];

    //info primer archivo
    $nombreArchivo1 = $_FILES['imgPokemon']['name'];
    $archivoTemporal1 = $_FILES['imgPokemon']['tmp_name'];

    //info segundo archivo
    $nombreArchivo2 = $_FILES['imgTipo']['name'];
    $archivoTemporal2 = $_FILES['imgTipo']['tmp_name'];

    $carpetaArchivo1 = "../img/" . $nombreArchivo1;
    $carpetaArchivo2 = "../img/" . $nombreArchivo2;

    // Mover archivos al servidor
    if(move_uploaded_file($archivoTemporal1, $carpetaArchivo1) && move_uploaded_file($archivoTemporal2, $carpetaArchivo2)){
        include_once("conexionBDD.php");

        $sql = "INSERT INTO `apipokemon`(`imagenPokemon`, `imagenTipo`, `numero`, `nombre`, `descripcion`, `tipo`) VALUES ('$carpetaArchivo1','$carpetaArchivo2','$numeroPokemon','$nombrePokemon','$descripcionPokemon','$nombreTipoPokemon')";
        $resultado = mysqli_query($conn, $sql);

        if($resultado){
            header("Location: ../ADMIN/usuarioAdmin.php"); // Redirigir al usuario a la página deseada
            exit();
        }
        else{
            echo "Error al ejecutar el SQL: " . mysqli_error($conn);
        }

    } else {
        echo "Error al mover los archivos al servidor";
    }

} else {
    echo "No se han enviado archivos";
}

?>
