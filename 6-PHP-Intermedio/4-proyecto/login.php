<?php #login.php

session_start();

require_once "./src/controller/functions.controller.php";
require_once "./src/model/connection-db.model.php";

checkSession();
$connection = openConnection();

// Variables
$errorMessage = $successMessage = "";

# Check post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Capture form variables
    $user = strtolower(sanitizePhrase($_POST['login-user']));
    $password = md5(sanitizePassword($_POST['login-password']));

    // echo "usr: $user || pwd: $password <br />";

    if (empty($user) || empty($password)) {
        # Error message
        $errorMessage .= '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
    } else {
        // Query to select the user and password from users
        $sqlUser = "SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$password' ";
        $resultUser = mysqli_query($connection, $sqlUser);
        $resultRows = mysqli_num_rows($resultUser);
        // $resultFetchAssoc = mysqli_fetch_assoc($resultUser);

        // echo "Resultado: $resultRows <br /> ";
        // print_r($resultFetchAssoc);

        if ($resultRows != 0) {
            # Set user session and redirect to index.php
            $_SESSION['user'] = $user;
            header('Location: index.php');
        } else {
            # Error message
            $errorMessage .= '<div class="alert alert-danger" role="alert">Datos incorrectos.</div>';
        }


    }


}

require_once "./src/views/sesion-y-registro/login.view.php ";

?>