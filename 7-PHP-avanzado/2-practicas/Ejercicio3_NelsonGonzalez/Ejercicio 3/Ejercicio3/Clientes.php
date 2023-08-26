<?php session_start();

if (!isset($_SESSION['ID'])) {

    header('Location: index.php');

} elseif ($_SESSION['Rol'] != 1) {
    header('Location: Home.php');
} else {

    include 'BD/accesoBD.php';

    $conexionAbierta = IniciarConexion();

    $consulta = "SELECT * FROM Clientes_EJ3";

    $resultado = $conexionAbierta->query($consulta);

    cerrarConexion($conexionAbierta);

    require_once 'App/Views/clientes.view.php';
}

?>