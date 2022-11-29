<?php



// Declaracion de variables
$errores = "";
$enviado = "";

// Beginig
if (isset($_POST["submit"])) {

    // Deconstrucción de $_POST
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Comprobar si $nombre tienen contenido
    if (!empty($nombre)) {

        // Sanitización de la variable $nombre
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
    } else {
        // Registrar el error cuando no hay nombre
        $errores .= "Por favor ingresa un nombre <br />";
    }

    // Comprobar si $correo tiene contenido
    if (!empty($correo)) {

        // Sanitización de la variable $correo
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= "Por favor, ingresa un correo válido <br>";
        }

    } else {
        $errores .= "El campo de correo no puede estar vacío <br> ";
    }

    // Comprobar si $mensaje tienen contenido
    if (!empty($mensaje)) {

        // Sanitización de la variable $mensaje
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        // Registrar el error cuando no hay nombre
        $errores .= "Recuerde escribir su mensaje. <br />";
    }

    // Preguntar si existen errores
    if (!$errores) {
        $enviar_a = "$correo";
    } else {
        # code...
    }


}

// Requiered Files
require "index.view.php";

?>