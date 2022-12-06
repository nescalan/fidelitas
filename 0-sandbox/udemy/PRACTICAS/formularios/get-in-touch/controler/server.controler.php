<?php

// VARIABLES: declaration
$error = "";
$sended = false;

if (isset($_POST["submit"])) {

    // $_POST Deconstruction
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $message = trim($message);

    // CONDITIONAL: Check name
    if (!empty($name)) {

        // SANITIZING: name
        $name = htmlspecialchars($name);
        $name = trim($name);

    } else {
        $error .= "Please, insert a name. <br >";
    }

    // CONDITIONAL: check email
    if (!empty($email)) {

        // SANITIZING: email
        $email = htmlspecialchars($email);

    } else {
        $error .= "Enter a valid email address. <br >";
    }

    // CONDITIONAL: check message
    if (!empty($message)) {

        // SANITIZING: messa$message
        $message = htmlspecialchars($message);

    } else {
        $error .= "Please, tell us what your message is!!! <br >";
    }

    $sended = true;

} else {
    $error .= "The form is empty...";
}


?>