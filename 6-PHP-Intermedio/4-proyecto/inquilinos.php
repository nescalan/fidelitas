<?php # inquilinos.php

require_once "./src/model/connection-db.model.php";

$connection = openConnection();

# Check the db connection
if ($connection->connect_errno) {
    // The page die
    die("Lo siento, hay un problema con el servidor.");
} else {
    // Select all items from table inquilinos
    $sqlTenants = "SELECT * FROM inquilinos";

    // Executes the query connection
    $result = $connection->query($sqlTenants);

    # Check errors on the last query
    if (!$result) {
        die($connection->error);
    }

}
closeConnection($connection);

require_once "./src/views/inquilinos.view.php";

?>