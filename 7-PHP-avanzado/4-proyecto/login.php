<?php // login.php


# Database Connections file
include_once './app/model/db_connection/Connection.model.php';
# Configuration file
include_once './app/admin/config.php';
# Functions file
include_once './app/funcs/functions.php';

$errorMessage = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data form
    $user = test_input($_POST["user"]);
    $password = test_input($_POST["password"]);

    echo "$user | $password";

echo "Usr: $user | Psd: $pwd";

echo "<br/> Paso directo";

# Login view file
require_once './app/views/login.view.php';


?>