<?php session_start();

if (!isset($_SESSION["ID"])) {

    header('Location: index.php');

} else {

    include 'BD/accesoBD.php';

    $conexionAbierta = IniciarConexion();

    $consulta =
        "SELECT Nombre, Descripcion, Imagen
        FROM Productos_EJ3";

    $resultado = $conexionAbierta->query($consulta);

    cerrarConexion($conexionAbierta);

    require_once 'App/Views/home.view.php';
}


?>