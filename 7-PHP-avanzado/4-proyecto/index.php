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

    // Calculates the page
    $posts = getPublications($blog_config['publication_per_page'], $dbConnection);
    // $publications = mysqli_fetch_assoc($posts);
    // var_dump($posts);

    if (!$posts) {
        // Error page
        header('Location: error.php');
    }

    // Call index view
    require_once './app/views/index.view.php';

    // Close the database connection when done
    $conn->closeConnection($dbConnection);
} catch (Exception $e) {
    // Handle any exceptions here
    echo 'Error: ' . $e->getMessage();
    // header('Location: error.php');
}

?>