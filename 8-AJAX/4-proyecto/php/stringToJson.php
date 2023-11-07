<?php

$conexion = new mysqli('localhost', 'root', '4u3p7px6', 'pokemon');

if ($conexion->connect_errno) {
    $respuesta = [
        'error' => true
    ];
} else {
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