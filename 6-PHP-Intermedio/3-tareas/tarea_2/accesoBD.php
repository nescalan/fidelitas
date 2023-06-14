<?php


function IniciarConexion()
{

    $serverName = "localhost";
    $user = "root";
    $password = "4u3p7px6";
    $bdName = "db_clientes";

    $conexion = new mysqli($serverName, $user, $password, $bdName);

    return $conexion;

}

function cerrarConexion($conexion)
{

    $conexion->close();

}

?>