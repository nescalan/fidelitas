<?php

# Database Connections file
require_once './app/model/db_connection/Connection.model.php';
# Configuration file
require_once './app/admin/config.php';
# Functions file
require_once './app/funcs/functions.php';

// Check GET is not empty
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])) {

    // Get the words from search form
    $search = sanitizeData($_GET['search']);

    # New database connection, sets data from 'config' file
    $conn = new Connection(
        $bd_config['host'],
        $bd_config['user'],
        $bd_config['pwd'],
        $bd_config['database']
    );


    try {

        # Open the database connection
        $dbConnection = $conn->openConnection();

        # Validates connection
        if (!$dbConnection) {
            // Error page
            header('Location: error.php');
        }

        // Read from dB
        $queryPublications =
            "SELECT *
            FROM publications 
            WHERE title LIKE '%$search%' or post_content LIKE '%$search%'";

        // Send query
        $resultPublications = mysqli_query($dbConnection, $queryPublications);
        // print_r($resultPublications);

        // $resultado = mysqli_fetch_array($resultPublications);
        // echo "El resultado es: $resultado";

        if (empty($resultPublications)) {
            $titulo = "No se encontraron articulos con el resultado: $search";
        } else {
            $titulo = "Resultados de la busqueda:  $search";
        }

    } catch (Exception $e) {
        // Handle any exceptions here
        header('Location: error.php');
    }
} else {
    // The method GET is empty
    header('Location:' . ROUTE . '/index.php');
}

require 'app/views/search.view.php';

?>