<?php

// Configuración de parámetros de la conexión
$conexion = new mysqli('localhost', 'root', '4u3p7px6', 'pokemon');

// CONDICIONAL: Si no hay errores, consulta y devuelve datos de usuarios en formato JSON.
if ($conexion->connect_errno) {
    $respuesta = [
        'error' => true
    ];
} else {

    echo "hay conexion";

    $conexion->set_charset("utf8");

    $respuesta = mysqli_query($conexion, "SELECT * FROM favorites");

    if (mysqli_num_rows($respuesta) > 0) {
        $newArray = array();

        while ($row = mysqli_fetch_assoc($respuesta)) {
            $newArray[] = $row;
        }

        echo json_encode($newArray);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hola mundo</h1>
</body>

</html>