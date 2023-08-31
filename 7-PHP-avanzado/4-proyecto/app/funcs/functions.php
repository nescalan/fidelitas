<?php // functions.php

# Sanitize form data
function sanitizeData($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

# Calculates the actual page
function actualPage()
{
    return isset($_GET['p']) ? $_GET['p'] : 1;
}

// Obtains publications per page from dB
function getPublications($publication_per_page, $dbConnection)
{
    $start = (actualPage() > 1) ? actualPage() * $publication_per_page - $publication_per_page : 0;

    // Read from dB
    $queryPublications =
        "SELECT SQL_CALC_FOUND_ROWS *
         FROM publications 
         LIMIT $start, $publication_per_page";

    // Send query
    $resultPublications = mysqli_query($dbConnection, $queryPublications);

    return $resultPublications;
}

// Calculates the number of pages in the blog
function pagesNumber($publication_per_page, $dbConnection)
{
    // Read from dB
    $queryTotalPosts = "SELECT FOUND_ROWS() as total";

    //Send query
    $resultTotalPosts = mysqli_query($dbConnection, $queryTotalPosts);
    $resultTotalPosts = mysqli_fetch_assoc($resultTotalPosts);

    // Calculate the number of pages the blog will have
    $pagesNumber = ceil($resultTotalPosts['total'] / $publication_per_page);

    return $pagesNumber;
}

// This function gets a specific post from the database
function getPost(int $pPageID, $pDBConnection)
{
    // Read from dB
    $queryPost =
        "SELECT * 
        FROM blog.publications
        WHERE id = $pPageID
        LIMIT 1";

    // Send query
    $resultPost = mysqli_query($pDBConnection, $queryPost);

    return $resultPost;
}

// This function calculates the date from a string.
function calculateDate($pDate)
{
    // String to time function
    $timestamp = strtotime($pDate);

    $months = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Setiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
    ];

    // Extracts day, month and year from timestamp
    $day = date('d', $timestamp);
    $month = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    // Date format needed
    $resultDate = "$day de {$months[$month]} de $year";

    return $resultDate;
}

function validateSession()
{
    if (!isset($_SESSION['admin']))
        header('Location: index.php');

}

function id_article($id)
{
    return (int) sanitizeData($id);
}

function contar_usuarios()
{
    $archivo = 'contador.txt';

    if (file_exists($archivo)) {
        $cuenta = file_get_contents($archivo) + 1;
        file_put_contents($archivo, $cuenta);

        return $cuenta;
    } else {
        file_put_contents($archivo, 1);
        return 1;
    }
}

function visitCounter()
{
    // Visitor counter
    $counterfile = "./counter.txt";

    if (!file_exists($counterfile)) {
        file_put_contents($counterfile, "0");
    }

    // Read the current value of the counter
    $counter = intval(file_get_contents($counterfile));

    // Increase the counter by 1
    $counter++;

    // Save updated counter to file
    file_put_contents($counterfile, $counter);

    return $counter;
}

?>