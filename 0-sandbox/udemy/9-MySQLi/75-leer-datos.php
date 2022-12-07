<?php

$servername = "localhost";
$user = "root";
$password = "4u3p7px6";
$database = "prueba_datos";

// CONNECTION
$connection = new mysqli($servername, $user, $password, $database);

if ($connection->connect_errno) {
    die("Lo sentimos, estamos experimentando problemas en este momento.");
} else {
    echo "Conexión establecida";
    $sql = "SELECT * FROM usuarios3";
    $resultado = $connection->query($sql);
    print_r($resultado);
}


?>