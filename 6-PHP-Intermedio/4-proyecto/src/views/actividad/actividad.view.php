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
        <div class="container mt-5 text-center">
            <div class="card">
                <h5 class="card-header">Actividad del día </h5>
                <div class="card-body">
                    <h5 class="card-title mt-5">Total de Visitas registradas para hoy: </h5>
                    <p class="card-text fs-1 ">
                        <?php echo $activityNumber; ?>
                    </p>
                    <a href="#" class="btn btn-primary">Actualizar datos</a>
                </div>
            </div>

        </div>

    </main>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>