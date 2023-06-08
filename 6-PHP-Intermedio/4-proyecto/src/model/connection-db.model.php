<?php #connectionDB.php

// Variables declaration to connect with mysqli
$host = "localhost";
$user = "root";
$password = "";
$database = "axioma";

// Create MySqli connection
$connection = new mysqli($host, $user, $password, $database);



?>