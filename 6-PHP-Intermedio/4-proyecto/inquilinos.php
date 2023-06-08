<?php # inquilinos.php

require_once "./src/model/connection-db.model.php";

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";

require_once "./src/views/inquilinos.view.php";
?>