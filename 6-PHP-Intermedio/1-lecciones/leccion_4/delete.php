<?php

include_once('accesoBD.php');

$id = $_GET["id"];

$conexionAbierta = IniciarConexion();

$sql = "DELETE FROM T_Clientes WHERE id = $id";

$conexionAbierta -> query($sql);

echo "<script>alert('No se encontró un usuario con la identificación brindada.');</script>";
    header('location: listaClientes.php');

cerrarConexion($conexionAbierta);


?>