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

    if(move_uploaded_file($nombreArchivo1, $carpetaArchivo1) && move_uploaded_file($nombreArchivo2, $carpetaArchivo2)){
        include_once("conexionBDD.php");

        $sql = "INSERT INTO `apipokemon`(`imagenPokemon`, `imagenTipo`, `numero`, `nombre`, `descripcion`, `tipo`) VALUES ('$carpetaArchivo1','$carpetaArchivo2','$numeroPokemon','$nombrePokemon','$descripcionPokemon','$nombreTipoPokemon')";

        if(mysqli_query($conn, $sql)){
            header("Location: ../headerUsuarioAdmin");
            exit();
        }
        else{
            echo "Error al ejecutar el sql" . mysqli_error($conn);
        }

    }
    mysqli_close($conn);
}else{
    echo "Error al mover los archivos al servidor";
}

?>
