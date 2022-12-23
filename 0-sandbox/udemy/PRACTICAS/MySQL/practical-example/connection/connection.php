<?php // connection.php

require_once "./connection/login-udemy.php";

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($connection) {
    die("We are sorry, but is not possible to complete the requested task.");
} else {
    echo "Good job...";
}


print_r($connection);

?>