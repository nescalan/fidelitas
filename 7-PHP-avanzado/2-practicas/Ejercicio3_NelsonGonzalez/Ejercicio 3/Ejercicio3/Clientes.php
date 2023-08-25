<?php

include 'BD/accesoBD.php';

$conexionAbierta = IniciarConexion();

$consulta = "SELECT * FROM Clientes_EJ3";

$resultado = $conexionAbierta->query($consulta);

cerrarConexion($conexionAbierta);

require_once 'App/Views/clientes.view.php';

?>