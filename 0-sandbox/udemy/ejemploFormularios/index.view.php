<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS: Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- CSS: Local Styles -->
    <link rel="stylesheet" href="style.css">
    <title>Formulario de Contacto</title>
</head>

<body>
    <div class="wrap">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre: ">
            <input id="correo" class="form-control" type="email" name="correo" placeholder="Correo: ">

            <textarea id="mensaje" class="form-control" name="mensaje"></textarea>

            <?php if (!empty($errores)): ?>
            <div class="alert error">
                <?php echo $errores ?>
            </div>
            <?php elseif ($enviado): ?>
            <div class="alert success">
                <p>Enviado correctamente.</p>
            </div>
            <?php endif ?>



            <input id="btnSubmit" class="btn btn-primary" name="submit" type="submit" value="Enviar Correo">
        </form>
    </div>
</body>

</html>