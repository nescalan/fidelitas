<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-add-guest'])) {
    // Retrieve form data
    $idNumber = $_POST['id-number'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];

    // Perform guest edit logic
    // ...

    // Redirect to a success page or display a success message
    // ...
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hola soy Editar Inquilinos</h1>
    <section id="sec-add-guests" class="container mt-5 mb-2 col-lg-8 d-none">
        <div class="d-flex align-items-star container">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z" />
            </svg>
            <p><a id="btn-back" href="#display-inquilinos">Regresar a
                    usuarios</a></p>
        </div>
        <div class=" container p-4 border">
            <h3 class="fw-bold">Agregar Inquilino</h3>
            <p>
                Ingresa los siguientes datos para crear un usuario, los permisos otorgados dependerán del
                rol que le
                asignes y estos puedes modificarlos desde la configuración avanzada.
            </p>

            <!-- FORM: Agregar Inquilino -->
            <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method='POST'>
                <fieldset>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="id-number">Número de Cédula</label>
                                    <input id="id-number" name="id-number" type="number"
                                        onkeypress="return isNumber(event)" class="form-control mt-1">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="fullname">Nombre Completo</label>
                                    <input id="fullname" name="fullname" type="text" class="form-control mt-1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="phone">Teléfono</label>
                                    <input id="phone" class="form-control mt-1" name="phone" type="text">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="text">Estado</label>
                                    <select id="state" class="form-control mt-1" name="state" type="text">
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                    <span id="text1HelpBlock" class="form-text text-muted">Indicar si el
                                        inquilino
                                        está activo o inactivo.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group mb-3 d-flex justify-content-end ">
                        <div class="col-8 col-sm-5 col-md-5 col-lg-4 d-flex justify-content-between ">
                            <button id="btn-add-guest" name="btn-add-guest" class="btn btn-success">Agregar
                                Inquilino</button>
                            <!-- <a href="" id="btn-add-guest" name="btn-add-guest" class="btn btn-success">
                                    Agregar Inquilino
                                </a> -->
                            <a id="btn-cancel-guest" name="btn-cancel-guest" class="btn btn-danger" href="">
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
</body>

</html>