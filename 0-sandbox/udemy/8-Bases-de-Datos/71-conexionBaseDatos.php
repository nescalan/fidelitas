<?php

// Declaracion de variables
$baseDatos = "mysql:host=127.0.0.1; dbname=prueba_datos";
$user = "root";
$password = "4u3p7px6";


try {
    $conexion = new PDO($baseDatos, $user, $password);
    echo "Conexión Realizada";




} catch (PDOException $error) {
    //Mensaje de error
    echo "Error, no hay conexión: " . $error->getmessage();
}


?>