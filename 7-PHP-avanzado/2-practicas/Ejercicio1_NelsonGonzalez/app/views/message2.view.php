<?php include_once './index.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto - Universidad</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
            background-color: #d4e0e9;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid grey;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333333;
        }

        p {
            font-size: 16px;
            color: #555555;
        }

        .btn {
            display: inline-block;
            background-color: #9eb3c2;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
    </style>
</head>

<body class="body">
    <div class="container">
        <h2>Formulario de Contacto - Universidad</h2>
        <p>Estimado estudiante,<br>Gracias por contactarnos. Pronto recibirás una respuesta de uno de nuestros
            representantes para atender tu consulta.</p>
        <p>Mientras tanto, si tienes alguna pregunta adicional, no dudes en ponerte en contacto con nosotros.</p>

        <h2>Detalles de la Consulta</h2>
        <p><strong>Nombre:</strong>
            <?php echo $contact->getName(); ?>
        </p>
        <p><strong>Email:</strong>
            <?php echo $contact->getEmail(); ?>
        </p>
        <p><strong>Asunto:</strong>
            <?php echo $contact->getSubject(); ?>
        </p>
        <p><strong>Mensaje:</strong><br>
            <?php echo $contact->getMessage() ?>
        </p>

        <p>¡Esperamos verte pronto en nuestra universidad!</p>

        <a class="btn" href="#">Visita nuestro sitio web</a>
    </div>
</body>

</html>