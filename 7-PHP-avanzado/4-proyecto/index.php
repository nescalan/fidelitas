<?php //index.php

# Database Connections file
require_once './app/model/db_connection/Connection.model.php';
# Configuration file
require_once './app/admin/config.php';
# Functions file
require_once './app/funcs/functions.php';

# New database connection, sets data from 'config' file
$conn = new Connection(
    $bd_config['host'],
    $bd_config['user'],
    $bd_config['pwd'],
    $bd_config['database']
);

try {
    // Open the database connection
    $dbConnection = $conn->openConnection();

    // Check connection
    if ($dbConnection->connect_error) {
        die($dbConnection->connect_error);
    }

    // Calculates the publications per page
    $posts = getPublications($blog_config['publication_per_page'], $dbConnection);

    // Call index view
    require_once './app/views/index.view.php';

    // Close the database connection when done
    $conn->closeConnection($dbConnection);

    $counter = contar_usuarios();

} catch (Exception $e) {

    // Handle any exceptions here
    header('Location: error.php');
}


?>