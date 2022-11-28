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
        <div class="title">
            <h1>Leccion 45</h1>
            <h2>Usando PHP y HTML</h2>
            <p>Comprobando Datos del Formulario </p>
        </div>
        <form action="./server/validar_envio.php" method="POST">
            <label for="firstName">firstName:</label>
            <input type="text" name="firstName" id="firstName">

            <label for="email">Correo</label>
            <input type="email" name="email" id="email">

            <button type="submit" value="default" class="btnSubmit" name="btnSubmit">Submit</button>
        </form>
    </div>
</body>

</html>