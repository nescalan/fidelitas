<?php

if (isset($_POST["firstName"]) && !empty($_POST["firstName"])) {
    echo "Bienvenido {$_POST["firstName"]}! ";
} else {
    echo "Por favor, completar el campo [Nombre]";
}



?>