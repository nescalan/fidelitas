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

    die("Lo sentimos, estamos experimentando problemas en este momento. <br>");

} else {

    echo "Conexión establecida <br>";

    // CAPTURA: los valores que bienen del formulario
    $id = null;
    if (isset($_GET["nombre"]) && isset($_GET["edad"])) {
        $nombre = $_GET["nombre"];
        $edad = $_GET["edad"];
    }

    // CONULSTA: precarga el slq
    $statement = $connection->prepare("INSERT INTO usuarios3(id_usuario, nombre, edad) VALUES(?, ?, ?)");

    /* REMPLAZAR: los placeholders ? con los valores que vamos a usar entre comillas simples ''
    Una S por placeholder que tengamos
    s = string
    i = integer
    d = double
    */
    $statement->bind_param('ssi', $id, $nombre, $edad);

    // EJECUTAR: la ejecucion para insertar los datos
    $statement->execute();

    // CONDICIONAL: Indica cuantas filas cambiaron
    if ($connection->affected_rows >= 1) {
        echo "Filas agregadas: " . $connection->affected_rows . "<br>";
    } else {
        echo "No se han agregado datos. <br>";
    }

}


?>