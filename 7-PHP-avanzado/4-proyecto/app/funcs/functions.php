<?php // functions.php

# Sanitize form data
function sanitizeData($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

?>