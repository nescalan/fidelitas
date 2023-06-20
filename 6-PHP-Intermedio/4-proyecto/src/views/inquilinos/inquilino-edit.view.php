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
        <section id="sec-edit-guests" class="container mt-5 mb-2 col-lg-7 ">
            <div class="d-flex align-items-star container">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                    class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z" />
                </svg>
                <p><a id="btn-back" href="./inquilinos.php">Regresar a inquilinos</a></p>
            </div>
            <div class=" container p-4 border">
                <h3 class="fw-bold">Editar inquilino</h3>
                <p>
                    Ingresa los siguientes datos para crear un usuario, los permisos otorgados dependerán del
                    rol que le asignes y estos puedes modificarlos desde la configuración avanzada.
                </p>

                <!-- FORM: Editar Inquilino -->
                <form method='POST'>
                    <fieldset>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="id-number">Número de Cédula</label>
                                        <input id="id-number" name="id-number" type="number"
                                            onkeypress="return isNumber(event)" class="form-control mt-1" value=<?php echo $tenantFound["cedula"]; ?>>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="fullname">Nombre Completo</label>
                                        <input id="fullname" name="fullname" type="text" class="form-control mt-1"
                                            value="<?php echo $tenantFound['nombre']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="phone">Teléfono</label>
                                        <input id="phone" class="form-control mt-1" name="phone" type="text" value=<?php echo $tenantFound["telefono"]; ?>>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="text">Estado</label>
                                        <select id="state" class="form-control mt-1" name="state">
                                            <?php if ($tenantFound["estado"] == "activo"): ?>
                                                <option value="activo" selected>Activo</option>
                                                <option value="inactivo">Inactivo</option>
                                            <?php else: ?>
                                                <option value="activo">Activo</option>
                                                <option value="inactivo" selected>Inactivo</option>
                                            <?php endif; ?>
                                        </select>
                                        <span id="text1HelpBlock" class="form-text text-muted">Indicar si el
                                            inquilino está activo o inactivo.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group mb-3 d-flex justify-content-end ">
                            <div class="col-8 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-between ">
                                <button id="btn-update" name="btn-update" class="btn btn-info">Actualizar
                                    Inquilino</button>
                                <a id="btn-cancel" name="btn-cancel" class="btn btn-light border"
                                    href="./inquilinos.php">
                                    Cancelar
                                </a>
                            </div>
                        </div>

                        <?php if (!empty($errorMessage)): ?>
                            <div class="text-danger">
                                <?php echo $errorMessage; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($successMessage)): ?>
                            <div class="bg-info rounded">
                                <?php echo $successMessage; ?>
                            </div>
                        <?php endif; ?>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

    <script src="./assets/js/inquilinos.jquery.js"></script>
    <script src="./assets/js/numbervalidation.js"></script>

</body>

</html>