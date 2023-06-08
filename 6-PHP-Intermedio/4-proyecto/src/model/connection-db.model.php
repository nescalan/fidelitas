<?php #connectionDB.php

// Variables declaration to connect with mysqli
$host = "localhost";
$user = "root";
$password = "";
$database = "axioma";

// Create MySqli connection
$connection = new mysqli($host, $user, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>