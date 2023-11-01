<?php

$texto = $_GET["texto"];

$serverName = "localhost";
$user = "root";
$password = "";
$bdName = "equipos";

$conexion = mysqli_connect($serverName, $user, $password, $bdName);

$conexion->set_charset("utf8");

// $respuesta = mysqli_query($conexion, "SELECT nombre FROM clientes WHERE nombre LIKE '" . $texto . "%'");
$respuesta = mysqli_query($conexion, "SELECT * FROM laptops");

if (mysqli_num_rows($respuesta) > 0) {
    $newArray = array();

    while ($row = mysqli_fetch_assoc($respuesta)) {
        $newArray[] = $row;
    }

    echo json_encode($newArray);
}



?>