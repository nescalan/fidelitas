<?php 

//Variables String
$Nombre = "Carlos";
$Apellido1 = "Ramirez";
$Apellido2 = "Soto";

$Apellidos = $Apellido1 . '&nbsp;' . $Apellido2;

//Integer
$Edad = 15;
$Resta = 5;

//Boolean 
$EsMayorEdad = false;

//Array
$ArrayEscolaridad = ["Escuela", "Colegio", "Universidad"];

$Suma = $Edad + $Resta;

$AnnoActual = date("Y");

//echo $AnnoActual;

//var_export($ArrayEscolaridad)

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

<?php include 'menu.php';  ?>

    <section>

        <div class="row m-5 p-5 border">


            <div class="col-lg-12 mb-3 text-center">
                <h3>PHP Intermedio - 5to Periodo</h3>
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Nombre</label>
                <input type="text" value=<?php echo $Nombre ?> class="form-control" name="txtNombre" id="txtNombre">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Primer Apellido</label>
                <input type="text" value=<?php echo $Suma ?> class="form-control" name="txtApellido1" id="txtApellido1">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Segundo Apellido</label>
                <input type="text" value=<?php echo $ArrayEscolaridad[0] ?> class="form-control" name="txtApellido2" id="txtApellido2">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Correo</label>
                <input type="mail" value="" class="form-control" name="txtCorreo" id="txtCorreo">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Fecha Nacimiento</label>
                <input type="date" value="" class="form-control" name="txtFechaNac" id="txtFechaNac">
            </div>

            <div class="col-lg-6 mb-3">
                <label for="">Teléfono</label>
                <input type="number" onkeypress="return isNumber(event)" value="" class="form-control"
                    name="txtTelefono" id="txtTelefono">
            </div>

            <div class="col-lg-12 mb-4">
                <div class="border p-3">
                    <label for="">Anotaciones</label>
                    <ol>
                        <li>El echo imprime texto en pantalla, y pueden ser múltiples valores.</li>
                        <li>El print_r no solo retorna cadenas, ya que retorna variables de todo tipo.</li>
                        <li>El print retorna solo 1 elemento, no puede imprimir multiples valores.</li>
                        <li>El var_dump realiza impresiones de forma más detallada del elemento.</li>
                    </ol>
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