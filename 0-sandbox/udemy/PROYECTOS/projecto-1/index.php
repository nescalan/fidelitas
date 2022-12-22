<?php
require_once "./connection/login.php";

// DECLARACION: variables
// $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
// $postPorPagina = 5;

// Connecting to MySQL
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

// CONDICIONAL: valida la conexión a la base de datos
if ($connection->connect_error) {
    // Mensaje de eroor
    die("Lo sentimos estamos presentado problemas para conectar la base de datos");
} else {
    echo "Conectados con éxito";
}




require_once "./index.view.php";

?>