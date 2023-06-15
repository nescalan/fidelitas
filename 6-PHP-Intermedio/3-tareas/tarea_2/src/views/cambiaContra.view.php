<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/cambia-contra.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include 'menu.php' ?>
    </header>

    <main>
        <form class="form" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST">
            <p class="title">Cambiar Contraseña </p>
            <p class="message">Usa el siguiente formulario para cambiar la clave. </p>
            <label>
                <input id="old-password" class="input" name="old-password" placeholder="" type="password">
                <span>Contraseña Actual</span>
            </label>

            <label>
                <input id="new-password" class="input" name="new-password" placeholder="" type="password">
                <span>Nueva Contraseña</span>
            </label>
            <label>
                <input id="confirmed-password" class="input" name="confirmed-password" placeholder="" type="password">
                <span>Confirmar Nueva Contraseña</span>
            </label>
            <button class="submit" name="btn-cambio-clave">Cambiar Contraseña</button>
            <?php if (!empty($errorMessage)): ?>
                <div class="text-danger">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($successMessage)): ?>
                <div class="text-success">
                    <?php echo $successMessage; ?>
                </div>
            <?php endif; ?>
        </form>
    </main>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

    <script>

        window.onload = InicioDT();

        function InicioDT() {
            $('#clientes').DataTable();
        }

        const confirmEliminar = (pId) => {
            if (confirm("¿Está seguro que desea eliminar al usuario " + pId + " ?")) {
                window.location.href = "delete.php?id=" + pId;
            }
        }

    </script>
</body>

</html>