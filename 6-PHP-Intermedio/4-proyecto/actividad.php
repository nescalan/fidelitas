<?php #actividad.php 

// Variables declaration
$activityNumber = "";

require_once "./src/model/connection-db.model.php";

$connection = openConnection();

# Check the db connection
if (!$connection) {
    // The page die
    die("Lo siento, hay un problema con el servidor");
} else {
    // Select al items from table visitas
    $sql = "SELECT * FROM visitas";

    // Executes the query connection
    $result = $connection->query($sql);

    # CONDITIONAL: Check errors on the last query
    if (!$result)
        die($connection->error);

    $activityNumber = $result->num_rows;
}

require_once "./src/views/actividad.view.php";

?>