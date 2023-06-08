<?php #actividad.php 

require_once "./src/model/connection-db.model.php";
require_once "./src/views/actividad.view.php";


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";

?>