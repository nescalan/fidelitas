<?php // login.php

session_start();

# Database Connections file
require_once './app/model/db_connection/Connection.model.php';
# Configuration file
require_once './app/admin/config.php';
# Functions file
require_once './app/funcs/functions.php';

$errorMessage = " ";

// Check POST is not empty
if (isset($_POST['btnLogin'])) {

    // Get the data form
    $user = sanitizeData($_POST['user']);
    $password = sanitizeData($_POST['password']);

    echo "$user | $password";

    # New database connection, sets data from 'config' file
    $conn = new Connection(
        $bd_config['host'],
        $bd_config['user'],
        $bd_config['pwd'],
        $bd_config['database']
    );

    try {

        # Open the database connection
        $dbConnection = $conn->openConnection();

        # Validates connection
        if (!$dbConnection) {
            // Error page
            header('Location: error.php');
        }

        echo "Hay buena conexion";

        // Read from dB
        $queryUsers =
            "SELECT * 
            FROM users 
            WHERE user_name = $user AND password = md5('$password')";

        // Send query
        $resultUsers = mysqli_query($dbConnection, $queryUsers);
        print_r($resultUsers);

        // $resultado = mysqli_fetch_array($resultUsers);
        // echo "El resultado es: $resultado";

        if (empty($resultUsers)) {
            $errorMessage = "Usuario o contraseña inválidos";

        }

    } catch (Exception $e) {
        // Handle any exceptions here
        header('Location: error.php');
    }
} else {
    // The method GET is empty
    // header('Location:' . ROUTE . '/index.php');
    echo "No hay conexion";

}

echo "<br/> Paso directo";
require_once './app/views/login.view.php';

# Login view file


?>