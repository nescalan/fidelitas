<?php
// Inicio de sesion
session_start();

$_SESSION["nombre"] = "Nelson";



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>

<body>
    <h1>60 - Sessions</h1>
    <p></p>
    <a href="./page_2.php">Ir a la pagina 2</a>
</body>

</html>