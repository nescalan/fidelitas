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
    $summary = sanitizeData($_POST['summary']);
    $post = sanitizeData($_POST['post']);
    $id = sanitizeData($_POST['id']);
    $thumbGuardada = $_POST['thumb-guardada'];
    $thumb = $_FILES['thumb'];
    $user_id = $_SESSION['id'];



    //Check if thumb is empty
    if (empty($thumb['name'])) {
        $thumb = $thumbGuardada;
    } else {
        // Else upload new thumb
        $uploadedFile = './' . $blog_config['folder_images'] . $_FILES['thumb']['name'];

        move_uploaded_file($_FILES['thumb']['tmp_name'], $uploadedFile);
        $thumb = $_FILES['thumb']['name'];

    }

    // Send everything to the dB
    $queryEditPost =
        "UPDATE `blog`.`publications`
            SET
            `title` = '$title',
            `summary` = '$summary',
            `post_content` = '$post',
           
            `user_id` = $user_id
            WHERE `id` = $id;
            ";

    $resultEditPost = mysqli_query($dbConnection, $queryEditPost);

    if (empty($resultEditPost)) {
        // Error page
        header('Location: error.php');
    }

    header('Location:admin.php');

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