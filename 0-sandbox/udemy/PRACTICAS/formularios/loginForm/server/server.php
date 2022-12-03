<?php

// variables declaration 
$errorMessage = "";
$success = false;


// validating the submission of the form
if (isset($_POST["btn-submit"])) {

    // deconstruction of &_POST
    $firstName = $_POST["first-name"];
    $email = $_POST["email"];

    // CONDITIONAL: if name is empty
    if (!empty($firstName)) {

        // SANITIZE FILTER: first name content
        $firstName = htmlspecialchars($firstName);

    } else {

        $errorMessage .= "El nombre no puede estar vacio <br />";
    }

    // CONDITIONAL: if email is empty
    if (!empty($email)) {

        // SANITIZE FILTER: email content
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // CONDITIONAL: is a valid email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        } else {
            $errorMessage .= "$email no es un correo valido. <br />";
        }

    } else {

        $errorMessage .= "El correo no puede estar vacio <br />";
    }

    // CONDITIONAL: success submit
    if (empty($errorMessage)) {
        $success = true;
    }


} else {
    # code...
}

?>