<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Assets/CSS/style.css">
</head>

<body>

    <?php include_once 'App/Componentes/Menu.php'; ?>

    <form action="" method="post">

        <section class="form-register p-5 imgFondo text-center">

            <h1 class="p-5"> Bienvenido/a,
                <?php echo $_SESSION["Nombre"]; ?>
            </h1>

        </section>

        <section class="form-register p- text-center">

            <h1 class="p-5"> Catálogo de Productos </h1>

            <div class="row px-3">

                <?php

                while ($fila2 = mysqli_fetch_array($resultado)) {
                    echo '
            <div class="col-lg-4 mb-5 d-flex text-center justCenter">
            <div class="card" style="width: 18rem;">
            <img src="Assets/Img/Dispositivos/' . $fila2["Imagen"] . '" class="card-img-top" alt="' . $fila2["Descripcion"] . '">
            <div class="card-body">
                <h5 class="card-title"> ' . $fila2["Nombre"] . ' </h5>
                <p class="card-text"> ' . $fila2["Descripcion"] . ' </p>
                <a href="#" class="btn btn-success">Comprar</a>
            </div>
            </div>
        </div>
            ';
                }

                ?>

            </div>

        </section>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

        <script>
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode < 48 || charCode > 57) {
                    return false;
                }
                return true;
            }

        </script>

    </form>

</body>

</html>