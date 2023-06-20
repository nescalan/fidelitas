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
    $sqlVisitas = "SELECT * FROM visitas";

    // Executes the query connection
    // $result = mysqli_query($connection, $sqlVisitas);
    $result = $connection->query($sqlVisitas);

    # CONDITIONAL: Check errors on the last query
    if (!$result)
        die($connection->error);

    // $activityNumber = mysqli_num_rows($result);
    $activityNumber = $result->num_rows;
}

require_once "./src/views/actividad/actividad.view.php";

?>