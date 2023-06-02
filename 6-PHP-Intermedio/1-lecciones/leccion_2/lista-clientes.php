<?php

include 'accesoBD.php';

$conexionAbierta = IniciarConexion();

$consulta = "SELECT * FROM T_Clientes";

$resultado = $conexionAbierta->query($consulta);

cerrarConexion($conexionAbierta);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
</head>

<body>

    <?php include 'menu.php' ?>

    <div class="row p-5">

        <table class="table table-bordered table-hover">

            <thead>
                <tr>
                    <td>Identificación</td>
                    <td>Nombre Completo</td>
                    <td>Correo</td>
                    <td>Teléfono</td>
                    <td>Acción</td>
                </tr>
            </thead>

            <tbody>

                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo '
            <tr>
                <td>' . $fila["id"] . '</td>
                <td>' . $fila["Nombre"] . ' ' . $fila["Apellido1"] . ' ' . $fila["Apellido2"] . '</td>
                <td>' . $fila["correo"] . '</td>
                <td>' . $fila["Telefono"] . '</td>
                <td> <button class="btn btn-dark"> Editar </button > <button class="btn btn-danger" > Eliminar </button> </td>
            </tr>
            ';
                }
                ?>

            </tbody>

        </table>

    </div>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>

</html>