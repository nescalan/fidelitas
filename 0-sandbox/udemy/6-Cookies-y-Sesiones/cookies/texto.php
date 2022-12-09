<?php

if (isset($_COOKIE["font-size"])) {
    $size = htmlspecialchars($_COOKIE["font-size"]);
} else {
    $size = "16px";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p {
            font-size: <?php echo $size ?>;
        }
    </style>
</head>
<h1>Elemento de texto</h1>
<?php echo $_COOKIE["font-size"]; ?>
<p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima corrupti eligendi consequatur iste, expedita
    voluptates nemo, et sequi vel culpa distinctio, ab veritatis provident? Neque magni odio corrupti tempore modi.
</p>


<body>

</body>

</html>