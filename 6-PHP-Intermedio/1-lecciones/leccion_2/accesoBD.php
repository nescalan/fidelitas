<?php # accesoDB.php

// FUNCTION
function IniciarConexion()
{
    $serverName = "localhost";
    $user = "root";
    $password = "4u3p7px6";
    $bdName = "id_clientes";


    // Conction to id_lcientes database on localhost
    $conexion = mysqli_connect($serverName, $user, $password, $bdName);
    return $conexion;
}

// FUNCTION: Execute connection
function cerrarConexion($conexion)
{
    $conexion->close();
}

?>