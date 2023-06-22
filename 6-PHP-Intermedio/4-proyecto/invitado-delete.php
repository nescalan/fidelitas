<?php # invitado-delete.php

session_start();

if (isset($_SESSION['user'])) {

    require_once "./src/model/connection-db.model.php";

    $id = $_GET["id"];
    $connection = openConnection();
    $sql = "DELETE FROM invitados WHERE id = $id";
    $connection->query($sql);

    header('location: invitados.php');

    closeConnection($connection);

} else {
    # Redirect to login.php
    header('Location: login.php');
}




?>