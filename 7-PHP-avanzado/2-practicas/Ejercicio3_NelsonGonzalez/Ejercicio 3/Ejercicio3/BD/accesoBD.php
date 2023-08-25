<?php

function IniciarConexion()
{

    $serverName = "localhost";
    $user = "root";
    $password = "4u3p7px6";
    $bdName = "ejercicio3";

    $conexion = new mysqli($serverName, $user, $password, $bdName);
    return $conexion;

}

function cerrarConexion($conexion)
{
    $conexion->close();
}

?>