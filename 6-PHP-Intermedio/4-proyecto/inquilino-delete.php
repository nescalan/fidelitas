<?php #inquilino-delete.php

session_start();

if (isset($_SESSION['user'])) {

    require_once "./src/model/connection-db.model.php";

    $id = $_GET["id"];

    $connection = openConnection();

    $sql = "DELETE FROM inquilinos WHERE id = $id";

    $connection->query($sql);

    echo "<script>alert('No se encontró un usuario con la identificación brindada.');</script>";
    header('location: inquilinos.php');

    closeConnection($connection);


} else {
    # Redirect to login.php
    header('Location: login.php');
}




?>