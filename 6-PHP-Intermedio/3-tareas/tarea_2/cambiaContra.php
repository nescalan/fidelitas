<?php #cambiaContra.php

# Variables declaration
$errorMessage = "";

require_once "./accesoBD.php";

if (isset($_POST['old-password']) && isset($_POST['new-password']) && isset($_POST['new-password'])) {
    # Get variables
    $userID = $_GET['id'];
    $oldPass = $_POST['old-password'];
    $newPass = $_POST['new-password'];
    $confirmedPass = $_POST['confirmed-password'];

    if (empty($oldPass) || empty($newPass) || empty($confirmedPass)) {
        // Message error
        $errorMessage .= "Debe llenar todos los campos.";
    } else {
        // Validate if new passord is equal to confirmed password
        if ($newPass !== $confirmedPass) {
            $errorMessage .= "La clave nueva no coincide.";
        }
    }
}

require_once "./src/views/cambiaContra.view.php";




?>