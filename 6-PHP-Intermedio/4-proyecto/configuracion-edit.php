<?php #configuracion-edit.php

session_start();

if (isset($_SESSION['user'])) {

    // VARIABLES: Declaration
    $tenantID = $_GET['id'];
    $errorMessage = $successMessage = "";

    # DATABASE: Connection
    require "./src/model/connection-db.model.php";
    $connection = openConnection();

    # Check dB connection
    if ($connection->connect_errno) {
        // The page die
        die("Lo siento, hay un problema con el servidor.");
    } else {
        // Select the user from table users
        $sessionUser = $_SESSION['user'];
        $sqlUser = "SELECT * FROM usuarios WHERE usuario = '$sessionUser' ";

        // Executes the query connection
        $result = $connection->query($sqlUser);

        // Check errors on the last query
        if (!$result) {
            die($connection->error);
        } else {
            // Check result > 0
            if (mysqli_num_rows($result) > 0) {
                $userFound = mysqli_fetch_array($result);
            } else {
                // Error message
                echo "Su consulta no puede ser realizada";
            }
        }

        // Check if btn-update isset
        if (isset($_POST["btn-update"])) {
            // echo "Boton <Update> ha sido pulsado <br/>";

            # Get variables
            $systemID = $userFound['id'];
            $fullName = $_POST['fullname'];
            // $userName = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password-2'];

            // Check if the variables are empty
            // if (empty($systemID) || empty($fullName) || empty($userName) || empty($password) || empty($password2)) {
            if (empty($systemID) || empty($fullName) || empty($password) || empty($password2)) {
                // Message error
                $errorMessage .= '<div class="alert alert-danger" role="alert">* Todos los campos son obligatorios.</div>';
            } elseif ($password != $password2) {
                // Message error   
                $errorMessage .= '<div class="alert alert-danger" role="alert">* Las claves no coinciden.</div>';
            } else {
                // Query to select user by id and password from database
                $password = md5($password);
                $queryUpdate = "UPDATE usuarios SET nombre=$fullName, clave='$password' WHERE id = $systemID";
                $result = mysqli_query($connection, $queryUpdate);

                echo "estoy aqui";

                // NEW CODE:
                // Select items from table inquilinos
                $sqlUser = "SELECT * FROM usuarios WHERE id = $systemID ";

                // Executes the query connection
                $result = mysqli_query($connection, $sqlUser);

                // Check errors on the last query
                if (!$result) {
                    die($connection->error);
                } else {
                    // Check result > 0
                    if (mysqli_num_rows($result) > 0) {
                        $userFound = mysqli_fetch_array($result);
                    } else {
                        // Error message
                        echo "Su consulta no puede ser realizada";
                    }
                }

                // Success message
                $successMessage .= "<p class='text-center text-white p-2'>El usuario se actualizó correctamente.</p>";
            }
        }

    }

    // Close connnection
    closeConnection($connection);
    require_once "./src/views/configuracion/configuracion-edit.view.php";

} else {
    # Redirect to login.php
    header('Location: login.php');
}

?>