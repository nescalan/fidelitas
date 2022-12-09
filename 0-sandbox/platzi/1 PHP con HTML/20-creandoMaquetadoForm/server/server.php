<?php

// Variables
$texto = "Esto no es un float";
$filter = FILTER_VALIDATE_EMAIL;

// Validando mi formulario con filtar_var()
$is_float = filter_var($texto, $filter);

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

    <p>Resultado de Validar is_float</p>
    <?= var_dump($is_float) ?>

</body>

</html>