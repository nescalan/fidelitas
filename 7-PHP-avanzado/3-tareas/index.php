<?php

session_start();

require_once 'app/model/db_connection/accesoBD.php';
require_once 'app/admin/config.php';

if (isset($_POST['btnIniciarSesion'])) {

    // Captura los valores del formulario
    $identificacion = $_POST['txtCedula'];
    $contrasenna = $_POST['txtClave'];

    // Database connection
    $conn = new AccesoBD($bd_config['host'], $bd_config['user'], $bd_config['pwd'], $bd_config['db'], );

    $conexionAbierta = $conn->iniciarConexion();

    $consulta = "SELECT * FROM Clientes_EJ2 WHERE identificacion = $identificacion AND Contrasenna = md5('$contrasenna')";

    $resultado = $conexionAbierta->query($consulta);



    echo "<br/> ID: $identificacion | pwd: $contrasenna ";

    if (mysqli_num_rows($resultado) === 0) {
        echo '<script> alert("Verifique sus credenciales de acceso."); </script>';
    } else {

        $personaEncontrada = mysqli_fetch_array($resultado);
        $_SESSION["Nombre"] = $personaEncontrada["fullname"];
        $_SESSION["Cedula"] = $personaEncontrada["identificacion"];
        $_SESSION["Rol"] = $personaEncontrada["rol"];

        echo '<script> location.replace("Home.php"); </script>';

    }

    $conn->cerrarConexion($conexionAbierta);
}

require_once './app/views/index.view.php';

?>