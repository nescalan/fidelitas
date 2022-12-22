<?php

require_once "./model/login.php";

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($connection->connect_error) {
    die("Sorry we are having problems");
} else {
    echo "Good job";
}


?>