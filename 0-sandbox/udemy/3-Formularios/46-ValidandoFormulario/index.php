<?php

// Declaracion de variables
$errores = "";

if (isset($_POST["btnSubmit"])) {
    // Deconstruccion de $_POST
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    if (!empty($nombre)) {

        // Sanitizacion de Variables
        $nombre = trim($nombre);
        $nombre = htmlentities($nombre);
        $nombre = stripslashes($nombre);

        // Filtratdo de variables
        $nombre = filter_var($nombre);

        // Impresion por pantalla
        echo "Hola $nombre, bienvenido a nuestra aplicacion";


    } else {

        // Impresion por pantalla
        $errores .= "Por favor, completar el campo de nombre. <br>";
    }

    if (!empty($correo)) {

        // Sanitizacion de Variables
        $correo = trim($correo);
        // $correo = htmlentities($correo);
        // $correo = stripslashes($correo);

        // Filtratdo de variables
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Impresion por pantalla
            $errores .= "Ingresa un correo valido";
        } else {
            // Impresion por pantalla
            echo "Hola tu correo es: $correo";
        }



    } else {

        // Impresion por pantalla  
        $errores .= "Por favor, agrega el correo";

    }


} else {
    // Impresion por pantalla
    echo "Los campos no pueden quedar vacios";
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS: Reset -->
    <link rel="stylesheet" href="./reset.css">
    <!-- CSS: Custom Styles -->
    <link rel="stylesheet" href="./css/global.css">
    <title>Comprobando datos de un Formularios con PHP</title>
</head>

<body>
    <div class="container">

        <!-- TITLE: Titulo del Formulario -->
        <div class="title">
            <h1>Leccion 46</h1>
            <h2>Usando PHP y HTML</h2>
            <p>Comprobando Datos del Formulario </p>
        </div>

        <!-- FORM: Inicio -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">


            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo">


            <?php if (!empty($errores)): ?>
            <div class="error">
                <?php echo $errores ?>
            </div>
            <?php endif ?>

            <button class="btnSubmit" type="submit" name="btnSubmit">Submit</button>
        </form>
        <!-- FORM: Final -->
    </div>
</body>

</html>