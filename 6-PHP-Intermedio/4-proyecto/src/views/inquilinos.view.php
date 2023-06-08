<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <!-- Latest personalized and minified CSS Bootstrap  -->
    <link rel="stylesheet" href="./assets/css/bootstrap_theme.css">
    <!-- CSS: Local stayles -->
    <link rel="stylesheet" href="./assets/css/global.css">
    <title>Proyecto | PHP Intermedio</title>
</head>

<body>
    <header>
        <?php require_once "./src/views/menu.php" ?>

    </header>

    <main>

        <div class="container mt-5 d-flex justify-content-end">
            <button type="button" class="btn btn-info">Agregar usuarios</button>
        </div>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cédula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row"> ' . $row['cedula'] . ' </th>
                            <td> ' . $row['nombre'] . ' </td>
                            <td> ' . $row['telefono'] . ' </td>
                            <td> ' . $row['estado'] . ' </td>
                        </tr>
                        ';
                    }
                    ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
    </main>
</body>

</html>