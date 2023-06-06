<?php #clientes.php

require_once "./src/msqli/db-connection.php";

// CONDITIONAL: Validates database connection
if ($connection->connect_errno) {

    # Kill page
    die("Error de conexión: No se puede establecer una conexión con la base de datos.");

} else {

    # Success message
    echo "Conexión a la base de datos establecida.";

    // PREPARED SQL: Building and executing a query
    $queryClients = "SELECT Nombre, Apellido1, Apellido2, correo FROM T_Clientes";
    $result = $connection->query($queryClients);
}

print_r($result);

require_once "./src/views/clientes.view.php";

?>