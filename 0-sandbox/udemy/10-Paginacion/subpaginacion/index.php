<?php
require_once 'login.php';
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

print_r($connection);

if ($connection->connect_error) {

    die($connection->connect_error);
} else {
    echo "Conexion realizada";
}
?>