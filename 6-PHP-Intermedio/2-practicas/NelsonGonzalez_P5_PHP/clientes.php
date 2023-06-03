<?php #clientes.php

require_once "./src/msqli/db-connection.php";

// PREPARED: Building and executing a query
$queryClients = "SELECT * FROM T_Clientes";
$result = $connection->query($queryClients);



if ($result === false) {
    # Kill page
    die("Error de conexión: No se puede establecer una conexión con la base de datos.");
}



print_r($result);
require_once "./src/views/clientes.view.php";

?>