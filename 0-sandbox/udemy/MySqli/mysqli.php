<?php

$server = "localhost";
$user = "root";
$password = "4u3p7px6";
$database = "prueba_datos";

$conexion = new mysqli($server, $user, $password, $database);

if ($conexion->connect_errno) {
    die("Lo siento, estamos presentando problemas de conexion... \n");
} else {
    echo "conexion ralizada <br>";
    $sql = "SELECT * FROM usuarios";
    $resultado = $conexion->query($sql);


    if ($resultado->num_rows) {
        while ($fila = $resultado->fetch_assoc()) {
            echo $fila["nombre"];
        }
    } else {
        # code...
    }


}


?>