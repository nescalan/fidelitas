<?php

// Variables
$status = "";
// function validate($name, $email, $subject, $message)
// {
//     return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
// }
// ;
function validate($name, $email, $subject, $message)
{
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}
;

if (isset($_POST["btnForm"])) {


    // Invocamos función para validar
    // print_r($validatePost);

    // if (validate($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    if (validate($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {


        // Desconstrucción de variables y Sanitizando los datos
        $name = htmlentities($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $subject = htmlentities($_POST['subject']);
        $message = htmlentities($_POST['message']);

        // Impresion por pantalla

        // MENSAJE: Enviado con exito!
        echo "Todo bien -> ";
        $status = "success";
    } else {
        // MENSAJE: Surgio un problema
        echo "Completar todos los campos";
        $status = "danger";
        echo ($_POST['message']);
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

        <!-- MESSAGE: Seccion de Mensaje Exitoso -->
        <?php if ($status == "success"): ?>
        <div class="alert success">
            <span>Enviado con exito!</span>
        </div>
        <?php endif ?>

        <!-- MESSAGE: Seccion de Mensaje de Error -->
        <?php if ($status == "danger"): ?>
        <div class="alert danger">
            <span>Surgió un problema</span>
        </div>
        <?php endif ?>

        <!-- TITLE: Formulario -->
        <div class="title">
            <h1>21 - Contactanos</h1>
            <h2>Logica del Formulario</h2>
            <p>Completa el siguiete formulario.</p>
        </div>

        <!-- FORM: Inicio -->
        <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]) ?>" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">


            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">

            <label for="subject">Asunto: </label>
            <input type="text" name="subject" id="subject">

            <label for="message">Mensaje:</label>
            <textarea name="message" id="" cols="30" rows="10"></textarea>

            <button type="submit" name="btnForm" class="btnSubmit">Submit</button>
        </form>
        <!-- FORM: Final -->

    </div>
</body>

</html>