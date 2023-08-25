<?php //single.php

# Database Connections file
require_once './app/model/db_connection/Connection.model.php';
# Configuration file
require_once './app/admin/config.php';
# Functions file
require_once './app/funcs/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Get the page ID from the URL and parse it to a number
    $pageID = (int) sanitizeData($_GET["id"]);

    // New database connection, sets data from 'config' file
    $conn = new Connection(
        $bd_config['host'],
        $bd_config['user'],
        $bd_config['pwd'],
        $bd_config['database']
    );
}

try {
    // Open the database connection
    $dbConnection = $conn->openConnection();

    # Open the database connection
    $dbConnection = $conn->openConnection();

    # Validates connection
    if (!$dbConnection) {
        // Error page
        header('Location: error.php');
    }

    # Check if the page's ID is empty
    if (empty($pageID)) {
        header('Location: index.php');
    }

    // Gets the respective publication using the id
    $resultPost = getPost($pageID, $dbConnection);
    // $resultPost = mysqli_fetch_all($resultPost);
    // print_r(mysqli_num_rows($resultPost));


    if (mysqli_num_rows($resultPost) == 0) {
        // Error page
        header('Location: error.php');
    }

    // $resultPost = $resultPost[0];

    // Call index view
    require_once './app/views/single.view.php';

    // Close the database connection when done
    $conn->closeConnection($dbConnection);

} catch (Exception $e) {

    // Handle any exceptions here
    echo 'Error: ' . $e->getMessage();
    // header('Location: error.php');
}

?>