<?php

// Declaracion de variables
$baseDatos = "mysql:host=127.0.0.1; dbname=prueba_datos";
$user = "root";
$password = "4u3p7px6";


try {
    $conexion = new PDO($baseDatos, $user, $password);
    echo "Conexión Realizada <br />";

    // CONSULTA: a la tabla usuarios
    $resultados = $conexion->query("SELECT * FROM Usuarios");

    // IMPRESION: usuarios consultados
    foreach ($resultados as $fila) {
        // print_r($fila);
        echo $fila["nombre"] . "<br />";
    }


} catch (PDOException $error) {
    //Mensaje de error
    echo "Error, no hay conexión: " . $error->getmessage();
}


?>