<?php

require_once "./connection/connection.php";

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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Uno</title>
</head>

<body>
    <h1>Hola mundo</h1>
    <h2>Esta es un practica de conexion a bases de datos</h2>
    <ul></ul>
</body>