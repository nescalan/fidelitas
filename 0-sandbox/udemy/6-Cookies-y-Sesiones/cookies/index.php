<?php

// SYNTAX
// setcookie(name, value, expire, path, domain, secure, httponly);
// Only the name parameter is required. All other parameters are optional.
$fontName = "font-size";
$fontSize = "40px";

// setcookie($fontName, $fontSize, time() + (8600 * 30), "/");
setcookie("font-size", $fontSize, time() + (8600 * 30), "/"); // 86400 = 1 day


$cookie_name = "font";
$cookie_value = "16px";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


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
    <h1>Cookie Creada</h1>



</body>

</html>