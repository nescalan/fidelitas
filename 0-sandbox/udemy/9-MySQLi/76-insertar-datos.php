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

    // CAPTURA: identificador desde el navegador
    $id = isset($_GET["id"]) ? $_GET["id"] : 1;

    // CONULSTA: precarga el slq
    $sql = "SELECT * FROM usuarios3 WHERE id_usuario = $id";
    $resultado = $connection->query($sql);

}


?>