<?php # viviendas.php

require_once "./src/model/connection-db.model.php";

$connection = openConnection();

# Check the db connection
if ($connection->connect_errno) {
    // The page die
    die("Lo siento, hay un problema con el servidor.");
} else {
    // Select all items from table inquilinos
    $sqlHomes = "SELECT * FROM viviendas";

    // Executes the query connection
    $result = $connection->query($sqlHomes);

    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }

    # Check errors on the last query
    if (!$result) {
        die($connection->error);
    }

}
closeConnection($connection);

require "./src/views/viviendas.view.php";

?>