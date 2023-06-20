<?php

require_once "./src/model/connection-db.model.php";

$id = $_GET["id"];

$connection = openConnection();

$sql = "DELETE FROM invitados WHERE id = $id";

$connection->query($sql);

echo "<script>alert('No se encontró un usuario con la identificación brindada.');</script>";
header('location: invitados.php');

closeConnection($connection);


?>