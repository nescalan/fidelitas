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
    <title>Validando Formularios con PHP</title>
</head>

<body>
    <div class="container">

        <div class="alert danger">
            <span>Surgió un problema</span>
        </div>

        <div class="alert success">
            <span>Mensaje enviado con exito!</span>
        </div>

        <div class="title">
            <h1>20 - Contactanos</h1>
            <h2>Validating Forms</h2>
            <p>Completa el siguiete formulario.</p>
        </div>
        <form action="./server/server.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">


            <label for="correo">Correo:</label>
            <input type="email" name="email" id="email">

            <label for="asunto">Asunto: </label>
            <input type="text" name="asunto" id="asunto">

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>

            <button type="submit" name="action" value="default" class="btnSubmit">Submit</button>
        </form>
    </div>
</body>

</html>