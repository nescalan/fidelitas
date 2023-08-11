<?php
session_start();
include_once('accesoBD.php');

$id = $_GET["id"];

$conexionAbierta = IniciarConexion();

$sql = "DELETE FROM T_Clientes WHERE id = $id";

$resultadoQuery = $conexionAbierta -> query($sql);

if($resultadoQuery){
    $_SESSION["success"] = "Usuario eliminado exitosamente.";
}else{
    $_SESSION["error"] = "Sucedió un error al eliminar al usuario.";
}

header('location: listaClientes.php');

cerrarConexion($conexionAbierta);

?>