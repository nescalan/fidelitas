<?php
session_start();

# Database Connections file
require_once './app/model/db_connection/Connection.model.php';
# Configuration file
require_once './app/admin/config.php';
# Functions file
require_once './app/funcs/functions.php';

validateSession();

// Define variables and set to empty values
$title = $summary = $post = $titleError = "";
$summaryError = $postError = $thumbImage = "";

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
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = sanitizeData($_POST['title']);

} else {
    // Assuming id_article() and getPost() are defined functions
    $id_article = id_article($_GET['id']);

    if (empty($id_article)) {
        header('Location: admin.php');
        exit; // Ensure script execution stops after redirection
    }

    $post = getPost($id_article, $dbConnection);

    if (!$post) {
        header('Location: admin.php');
        exit; // Ensure script execution stops after redirection
    }

    $post = mysqli_fetch_assoc($post);

}

require_once 'app/views/edit.view.php';
?>