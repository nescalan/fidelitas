<?php
// Inicio de sesion
session_start();

if ($_SESSION) {
    $nombre = $_SESSION["nombre"];
} else {
    echo "NO has iniciado sesión....";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Dos</title>
</head>

<body>

    <h1>Hola,
        <?php echo $nombre; ?>
    </h1>

    <a href="./cerrar.sesion.php">Cerrar Session</a>

</body>

</html>