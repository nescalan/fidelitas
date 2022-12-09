<?php

$servername = "localhost";
$user = "root";
$password = "4u3p7px6";
$database = "prueba_datos";

// CONNECTION
// $connection = new mysqli($servername, $user, $password, $database);

if ($connection->connect_errno) {
    die();
} else {
    echo "Conexión establecida";
}


?>