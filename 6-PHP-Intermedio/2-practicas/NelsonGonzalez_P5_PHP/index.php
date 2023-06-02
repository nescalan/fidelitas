<?php #index.php

// VARIABLES: Declaration
$errorMessage = "";
$successMessage = "";


// FUNCTION: sanitize phrase 
function sanitizePhrase($phrase)
{
    $phrase = trim($phrase);
    $phrase = strip_tags($phrase);
    $phrase = stripslashes($phrase);
    $phrase = htmlspecialchars($phrase);
    $phrase = strtolower($phrase);
    $phrase = filter_var($phrase, FILTER_SANITIZE_STRING);

    return $phrase;
}

// FUNCTION: Sanitize email
function sanitizeEmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    return $email;
}


require_once "./src/msqli/db-connection.php";

// VERIFICATION: verifies if submit was sent
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $firstName = $_POST['first-name'];
    $lastName1 = $_POST['last-name-1'];
    $lastName2 = $_POST['last-name-2'];
    $email = $_POST['email'];
    $birthDay = $_POST['birdth-day'];
    $phone = $_POST['phone'];

    // CONDITIONAL: Check if any viariable is empty
    if (empty($id) || empty($firstName) || empty($lastName1) || empty($lastName2) || empty($email) || empty($birthDay) || empty($phone)) {
        $errorMessage .= "Porfavor llene todos los campos.";
        echo "Porfavor llene todos los campos."; //Borrar

    } else {
        # success message
        $successMessage .= "¡Registro guardado!";
        echo "Registro Guardado: "; //Borrar

        // CONDITIONAL: sanitize variables
        $firstName = sanitizePhrase($firstName);
        $lastName1 = sanitizePhrase($lastName1);
        $lastName2 = sanitizePhrase($lastName2);
        $email = sanitizeEmail(sanitizePhrase($email));

        echo "$id | $firstName | $lastName1 | $lastName2 | $email | $birthDay | $phone";
    }

}

require_once "./src/views/index.view.php";


?>