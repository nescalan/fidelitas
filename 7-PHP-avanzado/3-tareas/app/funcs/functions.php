<?php // functions.php

function IniciarConexion()
{

    require_once 'app\model\db_connection\AccesoBD.php';

    // Database connection
    $conexion = new AccesoBD($bd_config['host'], $bd_config['user'], $bd_config['pwd'], $bd_config['db']);
    $conexionAbierta = $conn->iniciarConexion();


    return $conexion;

}

function cerrarConexion($conexion)
{

    $conexion->close();

}
?>