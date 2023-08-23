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

/**
 * Obtains publications from dB
 *
 * @param int $publication_per_page The number of publications to get per page.
 * @param object $dbConnection The database connection object.
 * @return object The publications object, or null if the publications do not exist.
 */
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

/*
 * This function gets a post from the database.
 *
 * @param int $pPageID The ID of the post to get.
 * @param object $pDBConnection The database connection object.
 * @return object The post object, or null if the post does not exist.
 */
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

/**
 * This function calculates the date from a string.
 *
 * @param string $pDate The date string in the format "YYYY-MM-DD".
 * @return string The date in the format "DD de MMMM del YYYY".
 */
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
    $resultDate = "$day de {$months[$month]} del $year";

    return $resultDate;

}

?>