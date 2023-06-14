<?php #cambiaContra.php

# Variables declaration
$errorMessage = "";

require_once "./accesoBD.php";
require_once "./src/views/cambiaContra.view.php";

if (!isset($_POST['old-password']) && !isset($_POST['new-password']) && !isset($_POST['new-password'])) {
    $errorMessage .= "Debe llenar todos los campos";
}





?>