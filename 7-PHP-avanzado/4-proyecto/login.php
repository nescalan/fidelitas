<?php // login.php

session_start();

# Database Connections file
include_once './app/model/db_connection/Connection.model.php';
# Configuration file
include_once './app/admin/config.php';
# Functions file
include_once './app/funcs/functions.php';

// Define variables and set to empty values
$user = $pwd = $userError = $pwdError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Required Fields
    if (empty($_POST["user"])) {
        $userError = "* Campo es obligatorio";
    } else {
        $user = sanitizeData($_POST['user']);
    }

    if (empty($_POST["password"])) {
        $pwdError = "* Campo es obligatorio";
    } else {
        $pwd = sanitizeData($_POST['password']);
    }

    echo "user: $user | Pwd: $pwd";

}

# Login view file
require_once './app/views/login.view.php';


?>