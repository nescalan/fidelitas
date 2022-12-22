<?php
require_once "./connection/login1.php";

$query = "SELECT * FROM articulos";
$result = $connection->query($query);

print_r($result);

?>