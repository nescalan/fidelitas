<?php #actividad.php 

require_once "./src/model/connection-db.model.php";
require_once "./src/views/actividad.view.php";



// Check connection
if (openConnection()) {
    die("No podemos completar la consulta: " . $connection->connect_error);
} else {
    echo "Conexion Exitosa";
}

?>