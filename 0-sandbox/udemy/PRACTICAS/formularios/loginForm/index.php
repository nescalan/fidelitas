<?php

// variables declaration 
$errorMessage = "";
$success = "";


// validating the submission of the form
if (isset($_POST["btn-submit"])) {

    // deconstruction of &_POST
    $firstName = $_POST["first-name"];
    $email = $_POST["email"];

    if (!empty($firstName)) {
        // Sanitazing $fistName
        $firstName = htmlspecialchars($firstName);

        echo "El nombre es $firstName <br />";
    } else {
        $errorMessage .= "El nombre no puede estar vacio <br />";
    }

    if (!empty($email)) {
        echo "El correo es $email <br />";

    } else {
        $errorMessage .= "El correo no puede estar vacio <br />";
    }



} else {
    # code...
}





require "./pages/form.php";

?>