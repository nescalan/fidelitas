<?php // login.php

// Check if the cookie exists
if (isset($_COOKIE['usuario_recordado'])) {
    // Login
    session_id($_COOKIE['usuario_recordado']);
    session_start();
}

# Database Connections file
include_once './app/model/db_connection/Connection.model.php';
# Configuration file
include_once './app/admin/config.php';
# Functions file
include_once './app/funcs/functions.php';

// Define variables and set to empty values
$user = $pwd = $loginError = "";

if (isset($_SESSION['admin'])) {
    header('Location: admin.php');
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Required Fields
        if (empty($_POST["user"])) {
            $userError = "* Campo es obligatorio";
        } else {
            $user = sanitizeData($_POST['user']);
            $user = filter_var($user, FILTER_SANITIZE_EMAIL);
            // Check if e-mail address is well-formed
            if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
                $userError = "** Invalid email format **";
            }
        }

        if (empty($_POST["password"])) {
            $pwdError = "* Campo es obligatorio";
        } else {
            $pwd = sanitizeData($_POST['password']);
        }

        # New database connection, sets data from 'config' file
        $conn = new Connection(
            $bd_config['host'],
            $bd_config['user'],
            $bd_config['pwd'],
            $bd_config['database']
        );

        try {
            // Open the database connection
            $dbConnection = $conn->openConnection();

            // Check connection
            if ($dbConnection->connect_error) {
                die($dbConnection->connect_error);
            }

            // Query the user and password
            $queryLogin =
                "SELECT * 
                FROM blog.users
                WHERE user_name = '$user'
                AND password = md5('$pwd')";

            $resultLogin = mysqli_query($dbConnection, $queryLogin);

            // Check if user was found
            if (mysqli_num_rows($resultLogin) == 0) {
                $loginError = "** Verifique sus credenciales de acceso **";
            } else {

                $userFound = mysqli_fetch_array($resultLogin);

                $_SESSION['admin'] = $userFound['user_name'];
                $_SESSION['id'] = $userFound['id'];

                // Heads the user to the admin page
                header('Location: admin.php');

                // Cookie
                if (isset($_POST['recordarSesion']) && $_POST['recordarSesion'] === 'on') {
                    $identificacion = $userFound['id'];
                    // Define a unique name for the cookie
                    $cookie_name = "usuario_recordado";
                    // Define the cookie expiration time (30 days)
                    $cookie_expiration = 30 * 24 * 60 * 60; // 30 days in seconds
                    // Create the cookie
                    setcookie($cookie_name, $identificacion, time() + $cookie_expiration, "/");
                } else {
                    // If the checkbox is not checked, ensure the cookie is deleted
                    if (isset($_COOKIE['usuario_recordado'])) {
                        unset($_COOKIE['usuario_recordado']);
                        setcookie('usuario_recordado', null, -1, '/');
                    }
                }
            }

            // Close the database connection when done
            $conn->closeConnection($dbConnection);

        } catch (Exception $e) {

            // Handle any exceptions here
            header('Location: error.php');
        }
    }
}

# Login view file
require_once './app/views/login.view.php';
?>