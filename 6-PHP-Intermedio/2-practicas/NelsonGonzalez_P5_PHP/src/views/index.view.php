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
        <span class="heading">Clientes</span>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="flex-container">
                <div class="left-col">
                    <label for="id">Identificacion:</label>
                    <input id="id" type="number" name="id" onkeypress="return isNumber(event)">

                    <label for="last-name-1">Primer Apellido:</label>
                    <input id="last-name-1" type="text" name="last-name-1">

                    <label for="email">Correo:</label>
                    <input id="email" type="text" name="email">

                    <label for="phone">Telefono:</label>
                    <input id="phone" type="text" name="phone" onkeypress="return isNumber(event)">
                </div>

                <div class="right-col">
                    <label for="first-name">Nombre:</label>
                    <input id="first-name" type="text" name="first-name">

                    <label for="last-name-2">Segundo Apellido:</label>
                    <input id="last-name-2" type="text" name="last-name-2">

                    <label for="birdth-day">Fecha de Nacimiento:</label>
                    <input id="birdth-day" type="date" name="birdth-day">
                </div>
            </div>

            <!-- MENSAJE: Mensaje de error -->
            <div>
                <?php if ($errorMessage): ?>
                    <div class="error-message">
                        <p>
                            <?= $errorMessage; ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    <!-- SCRIPT: Validation of the phone input -->
    <script src="./assets/js/index.js"></script>
</body>

</html>