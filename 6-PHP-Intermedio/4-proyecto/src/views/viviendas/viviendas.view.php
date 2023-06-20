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

<body>
    <header>
        <?php require_once "./src/views/menu.php" ?>
    </header>

    <main>
        <section id="sec-display-homes" class="container mt-5 col-lg-9">
            <div class=" d-flex justify-content-between mb-3">
                <div>
                    <h2>Viviedas</h2>
                </div>
                <button id="btn-homes" class="btn btn-info" type="button">
                    Agregar viviendas
                </button>

            </div>

            <div class="container">
                <table id="dt-tbl" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Número de Casa</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Estado</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                        <tr>
                            <th> ' . $row['numero_casa'] . ' </th>
                            <td> ' . $row['direccion'] . ' </td>
                            <td> ' . $row['telefono'] . ' </td>
                            <td> ' . $row['estado'] . ' </td>
                            <td> 
                            <a class="btn btn-circle btn-sm mr-2" href="vivienda-edit.php?id=' . $row['id'] . '" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>                                

                            <a class="btn btn-circle btn-sm" onclick="confirmEliminar(' . $row['id'] . ')" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </a>                                
                        </td>
                        </tr>
                        ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="sec-add-home" class="container mt-5 mb-2 col-lg-8 d-none">
            <div class="d-flex align-items-star container">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                    class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z" />
                </svg>
                <p><a id="btn-back" href="#display-inquilinos">Regresar a
                        viviendas</a></p>
            </div>
            <div class=" container p-4 border">
                <h3 class="fw-bold">Agregar vivienda</h3>
                <p>
                    Ingresa los siguientes datos para crear una nueva vivienda, los permisos otorgados dependerán del
                    rol que le asignes y estos puedes modificarlos desde la configuración avanzada.
                </p>

                <!-- FORM: Agregar Vivienda -->
                <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method='POST' autocomplete="off">
                    <fieldset>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="id-home">Número de Casa</label>
                                        <input id="id-home" name="id-home" type="text" class="form-control mt-1"
                                            autofocus>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="address">Dirección</label>
                                        <input id="address" name="address" type="text" class="form-control mt-1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="phone">Teléfono</label>
                                        <input id="phone" class="form-control mt-1" name="phone" type="number"
                                            onkeypress="return isNumber(event)">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="text">Estado</label>
                                        <select id="state" class="form-control mt-1" name="state" type="text">
                                            <option value="activo">Activo</option>
                                            <option value="inactivo">Inactivo</option>
                                        </select>
                                        <span id="text1HelpBlock" class="form-text text-muted">Indicar si la vivienda
                                            está activa o inactiva.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group mb-3 d-flex justify-content-end ">
                            <div class="col-8 col-sm-5 col-md-5 col-lg-4 d-flex justify-content-between ">
                                <button id="btn-add-home" name="btn-add-home" class="btn btn-primary ">Agregar
                                    vivienda</button>
                                <a id="btn-cancel-home" name="btn-cancel-home" class="btn btn-light" href="">
                                    Cancelar
                                </a>
                            </div>
                        </div>

                        <?php if (!empty($errorMessage)): ?>
                            <div class="text-white p-3 bg-danger border border-danger  ">
                                <?php echo $errorMessage; ?>
                            </div>
                        <?php endif; ?>


                    </fieldset>
                </form>
            </div>
        </section>

    </main>

    <!-- SCRIPT: Validations -->
    <script>
        const confirmEliminar = (pId) => {
            if (confirm("¿Está seguro que desea eliminar al usuario " + pId + " ?")) {
                window.location.href = "./vivienda-delete.php?id=" + pId;
            }
        }
    </script>

    <!-- Local Scripts -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/js/viviendas.jquery.js"></script>
    <script src="./assets/js/numbervalidation.js"></script>

    <!-- Data Tables -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/js/dataTableSP.js"></script>

</body>

</html>