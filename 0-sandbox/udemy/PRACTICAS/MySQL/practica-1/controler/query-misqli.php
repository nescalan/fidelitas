<?php
require_once "../connection/login.php";

$connection = new mysqli(
    $db_hostname,
    $db_username,
    $db_password,
    $db_database,
);

if ($connection->connect_error)
    die("We are sorry, but is not possible to complete the requested task.");

$query = "SELECT * FROM clientes";
$result = $connection->query($query);

// CONDITIONAL: testing error
if (!$result)
    die("We are sorry, but is not possible to complete the requested task.");

$rows = $result->num_rows;

# PRINTING: all the info into display
for ($j = 0; $j < $rows; $j++) {
    $result->data_seek($j);
    echo "Id: " . $result->fetch_assoc()["CustomerID"] . "<br/>";
    $result->data_seek($j);
    echo "Customer Name: " . $result->fetch_assoc()["CustomerName"] . "<br/>";
}

$result->close();
$connection->close();

?>