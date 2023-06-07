<?php # index.php

// define variables and set to empty values
$userName = $password = $errorMessage = $successMessage = "";

// FUNCTION: sanitize phrase
function sanitizeData($phrase)
{
    $phrase = trim($phrase);
    $phrase = strip_tags($phrase);
    $phrase = stripslashes($phrase);
    $phrase = htmlspecialchars($phrase);
    $phrase = strtolower($phrase);
    $phrase = filter_var($phrase, FILTER_SANITIZE_STRING);

    return $phrase;
}

// FUNCTION: sanitize password 
function sanitizePassword($password)
{
    // Remove all special characters from the password.
    $password = strip_tags($password);
    $password = htmlspecialchars($password);


    // Return the sanitized password.
    return $password;
}


// FUNTION: validate password lenght
function validatePasswordLength($password)
{
    // Check if the password is at least 8 characters long.
    if (strlen($password) < 8) {
        return false;
    }

    // The password is at least 8 characters long, so it is valid.
    return true;
}


# CONDITIONAL: Check if metho post was used
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['username'];
    $password = $_POST['password'];

    # CONDITIONAL: Check if username is empty
    if (empty($userName)) {
        // set error message
        $errorMessage .= "Debe completar el nombre";
    } else {
        // use function sanitizeData() to sanitaze name
        $userName = sanitizeData($userName);
    }

    # CONDITIONAL: Check if password is empty
    if (empty($password)) {
        // set error message
        $errorMessage .= "Debe completar la clave";
    } else {
        // Sanitize the password.
        $password = sanitizePassword($password);

        // Print the sanitized password.
        echo $password;

    }

    echo "Nombre: $userName | Clave: $password";
    echo "<br />";
    echo $testPassword;

}


require_once "./src/views/index.view.php";

?>