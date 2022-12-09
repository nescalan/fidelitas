<?php

// Deconstuyendo $_POST
$name = $_POST["nombre"];
$userName = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

// Sinitizando variables
$htmlentities = htmlentities($_POST["nombre"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<p>Nombre</p>
<?= $htmlentities  ?>

<p>userName</p>
<?= $userName  ?>

</body>

</html>