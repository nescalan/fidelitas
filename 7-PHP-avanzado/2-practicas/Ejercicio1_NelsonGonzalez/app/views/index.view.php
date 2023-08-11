<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLES: Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Ejercicio 1 - Nelson Gonzalez</title>
</head>

<body class="p-4">
    <!--Section: Contact v.2-->
    <section class="container mb-4 shadow p-3 mb-5 bg-white rounded">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contactenos</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">
            ¿Tiene usted alguna pregunta? Por favor no dude en contactar con nosotros
            directamente. <br />Nuestro equipo le responderá dentro de
            Cuestión de horas para ayudarte.
        </p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="mb-2">Nombre</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    placeholder="Ingrese su nombre completo" required>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <label for="email" class="mb-2">Correo</label>
                                <input id="email" class="form-control" type="email" name="email"
                                    placeholder="usuario@correo.com" required>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <div class="md-form mb-0">
                                <label for="subject" class="mb-2">Asunto</label>
                                <input id="subject" class="form-control" type="text" name="subject" placeholder="Asunto"
                                    required>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12 mt-4">

                            <div class="md-form">
                                <label for="message" class="mb-2">Mensaje</label>
                                <textarea type="text" id="message" name="message" rows="2"
                                    class="form-control md-textarea" maxlength="400"
                                    placeholder="Describa su observacion o consulta"></textarea>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                    <button class="btn btn-primary mt-4">Enviar</button>

                </form>

                <div class="status"></div>
            </div>
            <!--Grid column-->
        </div>

    </section>
    <!--Section: Contact v.2-->

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></script>
</body>

</html>