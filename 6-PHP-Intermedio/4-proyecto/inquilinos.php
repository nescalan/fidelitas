<?php # inquilinos.php

require_once "./src/model/connection-db.model.php";

$connection = openConnection();

# Check the db connection
if ($connection->connect_errno) {
    // The page die
    die("Lo siento, hay un problema con el servidor.");
} else {
    // Select all items from table inquilinos
    $sql = "SELECT * FROM inquilinos";

    // Executes the query connection
    $result = $connection->query($sql);

    # Check errors on the last query
    if (!$result) {
        die($connection->error);
    }

}


require_once "./src/views/inquilinos.view.php";

?>