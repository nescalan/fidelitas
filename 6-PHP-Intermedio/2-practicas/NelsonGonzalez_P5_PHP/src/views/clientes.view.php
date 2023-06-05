<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon"
        href="//www.fidelitasvirtual.org/moodle3/pluginfile.php/1/theme_remui/faviconurl/1685465691/favicon.png" />
    <!-- CSS: bootstrap CDN -->
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS: Local Styles -->
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    <title>Tarea Uno - PHP Intermedio</title>
</head>

<body>
    <?php include "./src/views/menu-usuarios.php"; ?>

    <div class="container my-5 p-3 border">
        <a class="btn btn-success mb-3" href="index.php">Crear Usuario</a>
        <div class="row justify-content-around">
            <?php
            while ($row = $result->fetch_assoc()) {
                echo '
            <div class="card" style="width:250px">
                <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">  ' . $row["Nombre"] . '&nbsp;' . $row["Apellido1"] . '&nbsp;' . $row["Apellido2"] . '  </h4>
                    <p class="card-text my-2"></p>
                    <a href="#" class="btn btn-primary"> ' . $row["correo"] . ' </a>
                </div>
            </div> 
        ';
            }
            ?>
        </div>
    </div>







    <!-- SCRIPT: Bootstap library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <!-- SCRIPT: jQuery library -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

    <!-- SCRIPT: Validation of the phone input -->
    <script src="./assets/js/index.js"></script>
</body>

</html>