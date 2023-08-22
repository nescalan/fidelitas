<?php //clientes.php

session_start();

if (!isset($_SESSION['identificacion'])) {
    header('Location: index.php');
} elseif ($_SESSION['Rol'] != 1) {
    header('Location: index.php');
} else {
    # Import files
    require_once 'app/model/db_connection/AccesoBD.php';
    require_once 'app/admin/config.php';

    // Database connection
    $conn = new AccesoBD($bd_config['host'], $bd_config['user'], $bd_config['pwd'], $bd_config['db']);
    $conexionAbierta = $conn->iniciarConexion();

    // SQL query
    $consulta = "SELECT * FROM Clientes_EJ2";
    $resultado = $conexionAbierta->query($consulta);

    $conn->cerrarConexion($conexionAbierta);

    require_once 'app/views/clientes.view.php';
}

?>