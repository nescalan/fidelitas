<?php include_once 'app/views/components/head.component.php'; ?>


<body>
    <?php include_once 'app\views\components\Menu.php'; ?>

    <div class="row p-5">

        <table id="clientes" class="table table-bordered table-hover">

            <thead>
                <tr>
                    <td>Identificación</td>
                    <td>Nombre Completo</td>
                    <td>Correo</td>
                    <td>Rol</td>
                    <td>Acción</td>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo '
            <tr>
                <td>' . $fila["identificacion"] . '</td>
                <td> ' . $fila["Nombre"] . '&nbsp;' . $fila["Apellido1"] . '&nbsp;' . $fila["Apellido2"] . ' </td>
                <td> ' . $fila["correo"] . ' </td>
                <td> ' . $fila["Rol"] . ' </td>
                <td> <a href="#" class="btn btn-dark" >Editar</a> <button class="btn btn-danger" >Eliminar</button> </td>
            </tr>
            ';
                }
                ?>
            </tbody>

        </table>

    </div>

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