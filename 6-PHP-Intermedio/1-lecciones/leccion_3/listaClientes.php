<?php

include 'accesoBD.php';

$conexionAbierta = IniciarConexion();

$consulta = "SELECT * FROM T_Clientes";

$resultado = $conexionAbierta -> query($consulta);

cerrarConexion($conexionAbierta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>

    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
</head>
<body>

<?php include 'menu.php' ?>

<div class="row p-5">

<a class="btn btn-success mb-4" href="index.php">Crear Usuario</a>

<table id="clientes" class="table table-bordered table-hover">

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
        while($fila = mysqli_fetch_array($resultado))
        {
            echo '
            <tr>
                <td>'.$fila["id"].'</td>
                <td> '.$fila["Nombre"]. '&nbsp;'. $fila["Apellido1"] . '&nbsp;' . $fila["Apellido2"] . ' </td>
                <td> '.$fila["correo"].' </td>
                <td> '.$fila["Telefono"].' </td>
                <td> <a href="editarRegistro.php?id='.$fila['id'].'" class="btn btn-dark" >Editar</a> <a class="btn btn-danger" href="delete.php?id='.$fila['id'].'" >Eliminar</a> </td>
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

<script src="vendor/jquery/jquery.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script>

    window.onload = InicioDT();

    function InicioDT(){
        $('#clientes').DataTable();
    }

</script>

</body>
</html>