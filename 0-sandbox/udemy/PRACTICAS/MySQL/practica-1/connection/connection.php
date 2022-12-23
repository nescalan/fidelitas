<?php
require_once "./connection/login.php";

$connection = new mysqli(
    $db_hostname,
    $db_username,
    $db_password,
    $db_database,
);


?>