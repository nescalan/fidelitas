<?php #db-connection.php

$db_hostname = "localhost";
$db_username = "root";
$db_password = "4u3p7px6";
$db_database = "id_clientes";

// Connecting to MySQL with mysqli
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

?>