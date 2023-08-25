<?php session_start();

include 'BD/accesoBD.php';

if (isset($_POST['btnIniciarSesion'])) {

    $identificacion = $_POST['txtCedula'];
    $contrasenna = $_POST['txtClave'];


    $conexionAbierta = IniciarConexion();

    if ($conexionAbierta->connect_error) {
        echo "Error de conexion";
        die("Connection failed: " . $conexionAbierta->connect_error);
    } else {
        echo "Conexion exitosa <br/>";
    }

    $consulta =
        "SELECT * 
        FROM Clientes_EJ3 
        WHERE identificacion = $identificacion AND Contrasenna = md5('$contrasenna')";


    $resultado = $conexionAbierta->query($consulta);
    echo "Print resultado: <br/>";
    var_dump($resultado);
    echo "<br/> Consulta: $identificacion | $contrasenna <br/>";

    if (mysqli_num_rows($resultado) === 0) {
        echo '<script> alert("Verifique sus credenciales de acceso."); </script>';
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