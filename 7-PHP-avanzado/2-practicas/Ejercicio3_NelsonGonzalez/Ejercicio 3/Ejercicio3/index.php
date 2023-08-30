<?php session_start();

include 'BD/accesoBD.php';

$errorMessage = "";

if (isset($_POST['btnIniciarSesion'])) {

    $identificacion = $_POST['txtCedula'];
    $contrasenna = $_POST['txtClave'];


    $conexionAbierta = IniciarConexion();

    if ($conexionAbierta->connect_error) {
        echo "Error de conexion";
        die("Connection failed: " . $conexionAbierta->connect_error);
    }

    $consulta =
        "SELECT * 
        FROM Clientes_EJ3 
        WHERE identificacion = $identificacion AND Contrasenna = md5('$contrasenna')";


    $resultado = $conexionAbierta->query($consulta);


    if (!$resultado) {
        header('Location:index.php');
    }

    if (mysqli_num_rows($resultado) === 0) {
        echo '<script> alert("Verifique sus credenciales de acceso."); </script>';
        $errorMessage = "Datos no encontrados";

    } else {

        $personaEncontrada = mysqli_fetch_array($resultado);
        $_SESSION["ID"] = $personaEncontrada["identificacion"];
        $_SESSION["Nombre"] = $personaEncontrada["Nombre"];
        $_SESSION["Rol"] = $personaEncontrada["Rol"];
        echo '<script> location.replace("Home.php"); </script>';
    }

}

require_once 'App/Views/index.view.php';


?>