<?php

// Declaracion de variables
$errorMessage = "";
$success = "";

if (isset($_POST["submit"])) {

    // DECONSTRUCTION: $_post variable
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["name"];

    // CONDITIONAL: validating name
    if (!empty($name)) {

        // SANITIZING: name values
        $name = htmlspecialchars($name);

        echo "el nombre es: $name";

    } else {

        // SETTING: error message
        $errorMessage .= "El nobre no debe estar vacio";
    }



    $success = true;
} else {

    // SETTING: error message
    $errorMessage .= "Estamos presentando un error en la verificacion de los datos, por favor revise todos los campos.";
}


require_once "./views/index.view.php";
?>