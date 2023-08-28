<?php // new.php

session_start();

# Database Connections file
require_once './app/model/db_connection/Connection.model.php';
# Configuration file
require_once './app/admin/config.php';
# Functions file
require_once './app/funcs/functions.php';

validateSession();

// Define variables and set to empty values
$title = $summary = $post = $titleError = $summaryError = $postError = "";


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

    // Vefify form content
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Required Fields
        if (empty($_POST["title"])) {
            $titleError = "* Campo es obligatorio";
        } else {
            $title = sanitizeData($_POST['title']);
        }

        if (empty($_POST["summary"])) {
            $summaryError = "* Campo es obligatorio";
        } else {
            $summary = sanitizeData($_POST['summary']);
        }

        if (empty($_POST["post"])) {
            $postError = "* Campo es obligatorio";
        } else {
            $post = sanitizeData($_POST['post']);
        }

        // Thumbnails
        $thumb = $_FILES['thumb']['tmp_name'];
        $uploadedFile = $blog_config['folder_images'] . $_FILES['thumb']['name'];
        move_uploaded_file($thumb, $uploadedFile);

        $image = $_FILES['thumb']['name'];
        $userID = $_SESSION['id'];

        // Query into database
        $queryNewPost =
            "INSERT INTO publications (`title`, `summary`, `date`, `post_content`, `thumb`, `user_id`) VALUES ( $title, $summary, <{date: }>, $post, $image, $userID)";


        header('Location:admin.php');

    }


    // Call index view
    require_once 'app/views/newpost.view.php';

    // Close the database connection when done
    $conn->closeConnection($dbConnection);


} catch (Exception $e) {

    // Handle any exceptions here
    // echo 'Error: ' . $e->getMessage();
    header('Location: error.php');
}

// require_once 'app/views/newpost.view.php';
?>