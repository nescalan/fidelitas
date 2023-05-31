<?php #index.php



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWEB-006</title>
</head>

<body>

    <section>

        <div class="row m-5 p-5 border">


            <div class="col-lg-12 mb-3 text-center">
                <h3>PHP Intermedio - 5to Periodo</h3>
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Nombre</label>
                <input id="txtNombre" class="form-control" type="text" value="" name="txtNombre">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Primer Apellido</label>
                <input id="txtApellido1" class="form-control" type="text" value="" name="txtApellido1">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Segundo Apellido</label>
                <input id="txtApellido2" class="form-control" type="text" value="" name="txtApellido2">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Correo</label>
                <input id="txtCorreo" class="form-control" type="mail" value="" name="txtCorreo">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Fecha Nacimiento</label>
                <input id="txtFechaNac" class="form-control" type="date" value="" name="txtFechaNac">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Teléfono</label>
                <input id="txtTelefono" class="form-control" type="number" onkeypress="return isNumber(event)" value=""
                    name="txtTelefono">
            </div>

            <div class="col-lg-12 mb-4">
                <div class="border p-3">
                    <label for="">Anotaciones</label>

                </div>

                <div class="col-lg-12 text-end">
                    <input type="button" class="btn btn-success" value="Validar Datos">
                </div>

                <a href="" target="_blank">
                </a>

            </div>

    </section>

    <script>
        const isNumber = (evt) => {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>

</html>