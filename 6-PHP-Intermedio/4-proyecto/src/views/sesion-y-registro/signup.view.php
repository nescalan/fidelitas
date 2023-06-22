<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <!-- Latest personalized and minified CSS Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap_theme.css">
    <!-- Data Tables Bootstrap library -->
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- CSS: Local stayles -->
    <link rel="stylesheet" href="./assets/css/global.css">
    <title>Proyecto | PHP Intermedio</title>
</head>

<body style="background-color: hsl(0, 0%, 96%)">
    <!-- Section: Design Block -->
    <section class="container">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="container">
                <div class="row gx-lg-5 ">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-5 fw-bold ls-tight">
                            Registra tus datos y crea una
                            <span class="text-primary">nueva cuenta.</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Registra tu cuenta y prueba registraes por 15 días en Plan Demo sin costo y sin compromiso.
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example1">Nombre Completo</label>
                                            <input type="text" id="form3Example1" class="form-control"
                                                name="fullname" />
                                        </div>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3">Email address</label>
                                        <input type="email" id="form3Example3" class="form-control" name="email" />
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4">Password</label>
                                        <input type="password" id="form3Example4" class="form-control"
                                            name="password" />
                                    </div>

                                    <!-- Confirm Password input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4">Confirmar Contraseña</label>
                                        <input type="password" id="form3Example4" class="form-control"
                                            name="confirm-password" />
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Crear cuenta
                                    </button>

                                    <!-- Register buttons -->
                                    <div class="text-center">
                                        <a class="btn btn-link" href="login.php">
                                            ¡Si ya tienes una cuenta Ingresa por aqui!
                                        </a>
                                    </div>

                                    <!-- Error messages -->
                                    <?php if (!empty($errorMessage)): ?>
                                        <div class=" p-2">
                                            <?php echo $errorMessage; ?>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>

</html>