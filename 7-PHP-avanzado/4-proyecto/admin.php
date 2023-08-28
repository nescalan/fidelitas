<?php // index.php

session_start();

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

validateSession();

try {
    // Comprobar session

    // Open the database connection
    $dbConnection = $conn->openConnection();

    // Check connection
    if ($dbConnection->connect_error) {
        die($dbConnection->connect_error);
    }

    // Calculates the publications per page
    $posts = getPublications($blog_config['publication_per_page'], $dbConnection);




    include_once 'app/views/admin.view.php';

} catch (\Throwable $th) {
    //throw $th;
}

?>