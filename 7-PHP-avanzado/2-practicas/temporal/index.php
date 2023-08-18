<?php

# Database Connections file
require_once 'app/model/db_connection/accesoBD.php';

# Users file
require_once 'app/classes/user.php';

# Configuration file
require_once 'app/admin/config.php';

# Functions file
require_once 'app/funcs/functions.php';

#Check if button was clicked
if (isset($_POST['btnIniciarSesion'])) {
    $conn = new Connection(
        $bd_config['host'],
        $bd_config['user'],
        $bd_config['pwd'],
        $bd_config['db']
    );

    // Get the information from the form
    $user = new User($_POST['txtCedula'], $_POST['txtClave']);

    // Open database connection
    $dbConnection = $conn->openConnection();

    // Check if user exists
    $resultado = getUsers($user->getId(), $user->getPwd(), $dbConnection);

    echo "User: {$user->getId()} | Pwd: {$user->getPwd()}";

    // Check if the user is valid
    if (mysqli_num_rows($resultado) === 0) {
        echo '<script> alert("Verifique sus credenciales de acceso."); </script>';
    } else {

        $personaEncontrada = mysqli_fetch_array($resultado);
        echo '<script> location.replace("Home.php"); </script>';
    }



}



// Imports index view
require_once './app/views/index.view.php';


// Close connection
$conn->closeConnection($dbConnection);

?>