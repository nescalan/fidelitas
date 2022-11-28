<?php

if (isset($_POST['btnSubmit'])) {
    echo "El formulario fue enviado con éxito";
    echo "<br>";

    // Desconstrucción de $_POST
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    echo "Hola $nombre, tu correo es: $correo";

} else {
    echo "El formulario, está vacío";
    echo ($_POST["btnSubmit"]);
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
            <h1>Leccion 45</h1>
            <h2>Usando PHP y HTML</h2>
            <p>Comprobando Datos del Formulario </p>
        </div>

        <!-- FORM: Inicio -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">


            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo">

            <button type="submit" name="btnForm" class="btnSubmit">Submit</button>
        </form>
        <!-- FORM: Final -->
    </div>
</body>

</html>