<?php #signup.php

session_start();
require_once "./src/model/connection-db.model.php";

$connection = openConnection();


// Variables
$errorMessage = $successMessage = "";

if (isset($_SERVER['user'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Recogemos las variables del formulario
    $fullName = filter_var(strtolower($_POST["fullname"]), FILTER_SANITIZE_STRING);
    $user = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    // echo " $fullName | $user | $password | $confirmPassword ";

    if (empty($fullName) || empty($user) || empty($password) || empty($confirmPassword)) {
        # Error message
        $errorMessage .= '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
    } else {
        # Check the db connection
        if ($connection->connect_errno) {
            // The page die
            die("Lo siento, hay un problema con el servidor.");
        } else {
            // Select all items from table usuarios
            $sqlUsers = "SELECT * FROM usuarios WHERE usuario = '$user' LIMIT 1";

            // Executes the query connection
            $result = mysqli_fetch_assoc(mysqli_query($connection, $sqlUsers));

            # Check errors on the last query
            if ($result) {
                $errorMessage .= '<div class="alert alert-danger" role="alert">El nombre de usuario ya existe.</div>';
            }

            if ($password != $confirmPassword) {
                # Error message
                $errorMessage .= '<div class="alert alert-danger" role="alert">Las contraseñas no son iguales.</div>';
            }
        }
    }

    if ($errorMessage == "") {
        # Password Hash
        $password = md5($password);

        # Insert sql into table usuarios
        $sqlUser = "INSERT INTO usuarios (nombre, usuario, clave) VALUES ('$fullName', '$user', '$password')";

        # Execute the SQL statement
        $addResult = mysqli_query($connection, $sqlUser);

        #Redirect to login.php
        header('Location: login.php');

        # Check the result
        if ($addResult === true) {
            echo "New record created successfully";
            echo '<script> window.location.href = "inquilinos.php" </script>';
        } else {
            echo "Error: " . $sqlUser . "<br>" . $connection->error;
            echo "The data was not inserted successfully.";
        }


    }
}

closeConnection($connection);
require_once "./src/views/sesion-y-registro/signup.view.php ";

?>