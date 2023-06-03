<?php #clientes.php


include "./src/views/clientes.view.php";

include 'accesoBD.php';

$conexionAbierta = IniciarConexion();

$consulta = "SELECT * FROM T_Clientes";

$resultado = $conexionAbierta->query($consulta);

cerrarConexion($conexionAbierta);

?>