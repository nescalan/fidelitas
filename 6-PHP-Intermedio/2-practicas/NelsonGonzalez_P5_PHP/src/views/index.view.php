<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon"
        href="//www.fidelitasvirtual.org/moodle3/pluginfile.php/1/theme_remui/faviconurl/1685465691/favicon.png" />
    <!-- CSS: Local Styles -->
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    <title>Tarea Uno - PHP Intermedio</title>
</head>

<body>
    <?php include "./src/views/menu-usuarios.php"; ?>

    <!-- FORMULARIO: Captura los datos necesarios del cliente -->
    <div class="contact-form">
        <span class="heading">Contact Us</span>
        <form>
            <label for="name">Name:</label>
            <input type="text" required="">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required="">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required=""></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>


</body>

</html>