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
    <title>Proyecto | PHP Intermedio</title>
</head>

<body>
    <header class=" ">
        <?php require_once "./src/views/menu.php" ?>
    </header>

    <main>
        <div id="mainContainer" class="container no-gutters mt-5">

            <div class="row align-items-center">
                <div class="col-12 col-sm-11 mx-auto">
                    <div class="card shadow-lg mb-3">
                        <h5 class="card-header d-flex justify-content-between align-items-center">
                            Actividad
                        </h5>

                        <div class="card-body">
                            <div class="row p-2 d-flex justify-content-between">
                                <!-- Primera tarjeta -->
                                <div class="card" style="width: 15rem;">
                                    <div class="card-body text-center">
                                        <p class="card-text">Ingresos del día</p>
                                    </div>
                                    <div class="text-center text-muted mt-1">
                                        <h4>Total: 0</h4>
                                    </div>
                                </div>

                                <!-- Segunda tarjeta -->
                                <div class="card" style="width: 15rem;">
                                    <div class="card-body text-center">
                                        <p class="card-text">Ingresos del día</p>
                                    </div>
                                    <div class="text-center text-muted mt-1">
                                        <h4>Total: 0</h4>
                                    </div>
                                </div>

                                <!-- Tercera tarjeta -->
                                <div class="card" style="width: 15rem;">
                                    <div class="card-body text-center">
                                        <p class="card-text">Salidas del día</p>
                                    </div>
                                    <div class="text-center text-muted mt-1">
                                        <h4>Total: 0</h4>
                                    </div>
                                </div>

                                <!-- Cuarta tarjeta -->
                                <div class="card" style="width: 15rem;">
                                    <div class="card-body">
                                        <p class="card-text text-center">Visitas los últimos</p>
                                    </div>
                                    <div class="text-center text-muted mt-1">
                                        <h4>Total: 0</h4>
                                    </div>
                                </div>

                            </div> <!-- Graph row-->
                        </div> <!-- card-body -->

                    </div> <!-- card -->
                </div><!-- first col -->
            </div> <!-- first row -->

        </div>

    </main>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>