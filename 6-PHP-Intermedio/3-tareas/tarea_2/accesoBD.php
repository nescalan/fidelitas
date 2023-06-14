<?php


function IniciarConexion(){

$serverName = "localhost";
$user = "root";
$password = "Fide123*";
$bdName = "bd_clientes";

$conexion = new mysqli($serverName, $user, $password, $bdName);

return $conexion;

}

function cerrarConexion($conexion){

    $conexion -> close();
    
}

?>