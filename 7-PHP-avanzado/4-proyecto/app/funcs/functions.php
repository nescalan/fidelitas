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

# Obtain publications from dB
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

?>