<?php //delete.php

session_start();

# Database Connections file
require_once './app/model/db_connection/Connection.model.php';
# Configuration file
require_once './app/admin/config.php';
# Functions file
require_once './app/funcs/functions.php';

validateSession();

// Define variables 
$id = sanitizeData($_GET['id']);

// Check if id is empty
if (!$id) {
    header('Location:admin.php');
} else {
    echo $id;
}

# New database connection, sets data from 'config' file
$conn = new Connection(
    $bd_config['host'],
    $bd_config['user'],
    $bd_config['pwd'],
    $bd_config['database']
);

// Open the database connection
$dbConnection = $conn->openConnection();

// Check connection
if ($dbConnection->connect_error) {
    die($dbConnection->connect_error);
} else {
    echo "<br> We have a dB connection";
}

// Delete post from database
$queryDeletePost =
    "DELETE FROM `blog`.`publications`
    WHERE id = $id";

$resultDeletePost = mysqli_query($dbConnection, $queryDeletePost);

header('Location:admin.php');


?>