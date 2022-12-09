<?php

// DECLARACION; variables
$servername = "localhost";
$user = "nelson";
$password = "4u3p7px6";
$database = "prueba_datos";

// CONNECTION
$connection = new mysqli($servername, $user, $password, $database);

// CONDICIONAL: verifica algun error en la conexion
if ($connection->connect_errno) {

    die("Lo sentimos, estamos experimentando problemas en este momento.");

} else {

    echo "Conexión establecida <br>";

    // CONULSTA: precarga el slq
    $sql = "INSERT INTO usuarios3(id_usuario, nombre, edad) VALUES(null, 'Tita Patita', 69)";
    $connection->query($sql);

    // CONDICIONAL: Indica cuantas filas cambiaron
    if ($connection->affected_rows >= 1) {
        echo "Filas agregadas: " . $connection->affected_rows;
    }

}


?>