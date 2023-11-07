<?php

// Crear una conexión a la base de datos MySQL.
$conexion = new mysqli('localhost', 'root', '4u3p7px6', 'pokemon');

// Comprobar si se produjo un error en la conexión.
if ($conexion->connect_errno) {
    $respuesta = [
        'error' => true
    ];
} else {
    // Establecer el juego de caracteres de la conexión a UTF-8.
    $conexion->set_charset("utf8");

    // Ejecutar una consulta SQL para seleccionar todos los registros de la tabla 'favorites'.
    $respuesta = mysqli_query($conexion, "SELECT * FROM favorites");

    // Comprobar si se encontraron filas en el resultado de la consulta.
    if (mysqli_num_rows($respuesta) > 0) {
        $newArray = array();

        // Recorrer cada fila de resultados y almacenarla en un nuevo arreglo.
        while ($row = mysqli_fetch_assoc($respuesta)) {
            $newArray[] = $row;
        }

        // Convertir el arreglo de resultados a formato JSON y mostrarlo.
        echo json_encode($newArray);
    }
}

?>