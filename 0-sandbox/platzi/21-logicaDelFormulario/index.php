<?php

function validate($name, $email, $subject, $message)
{
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}
;

if (isset($_POST["form"])) {

    if (validate(...$_POST)) {

        // Desconstrucción de variables, despues de esto hay que sanitizar los datos
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Sanitize: Crearlo en la casa

        // Enviar mensaje al correo
        $status = "success";

    } else {
        // No se envía el correo
        $status = "danger";
    }
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
    <title>Validando Formularios con PHP</title>
</head>

<body>
    <div class="container">

        <div class="alert success">
            <span>Mensaje enviado con exito!</span>
        </div>

        <div class="alert danger">
            <span>Surgió un problema</span>
        </div>

        <!-- Titulo del Formulario -->
        <div class="title">
            <h1>Contactanos</h1>
            <h2>Validating Forms</h2>
            <p>Completa el siguiete formulario.</p>
        </div>

        <!-- FORM: Inicio -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">


            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">

            <label for="subject">Asunto: </label>
            <input type="text" name="subject" id="subject">

            <label for="message">Mensaje:</label>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>

            <button type="submit" name="form" value="default" class="btnSubmit">Submit</button>
        </form>
        <!-- FORM: Final -->

    </div>
</body>

</html>