<?php

$servername = "localhost";
$user = "nelson";
$password = "4u3p7px6";
$database = "prueba_datos";

// CONNECTION
$connection = new mysqli($servername, $user, $password, $database);

if ($connection->connect_errno) {
    die("Lo siento, estamos presentando problemas de conexion.");
} else {
    echo "Conexión establecida";
}


?>