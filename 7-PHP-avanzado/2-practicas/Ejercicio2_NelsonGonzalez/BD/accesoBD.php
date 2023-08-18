<?php // accesoBD.php

function IniciarConexion()
{
    // Variables
    $servername = 'localhost';
    $username = 'root';
    $password = '4u3p7px6';
    $database = 'ejercicio2';

    // Create connection
    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $database
    );

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function cerrarConexion($conexion)
{

    $conexion->close();

}


?>