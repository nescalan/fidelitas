<?php

$query = "SELECT * FROM articulos";
$result = $connection->query($query);

if (!$result)
    die($connection->error);


?>