
<?php


///////////Archivos


//a -> Escribe o crea un archivo y no elimina el contenido existente.
//w -> Escribe o crea un archivo pero elimina el contenido existente. 
//r -> Lectura del archivo.

///////Escritura
$file = fopen("logErrores2.txt", "a");

fwrite($file, "Se agregó otra línea" . PHP_EOL);

fclose($file);

session_start();


////////Lectura
$fileR = fopen("logErrores2.txt", "r");

while(!feof($fileR)){

    echo fgets($fileR) . "<br/>";

}


///////////////////////


$id = $_GET["id"];

include 'accesoBD.php';
include 'objUsuario.php';
include 'metodosBD.php';

$conexionAbierta2 = IniciarConexion();

$resultadoPersona = "SELECT * FROM T_clientes WHERE id = $id";

$resultadoQuery = $conexionAbierta2 -> query($resultadoPersona);

if($resultadoQuery){

    if(mysqli_num_rows($resultadoQuery) > 0){

        $personaEncontrada = mysqli_fetch_array($resultadoQuery);

    }else{
        echo 'No hay usuario.';
    }

}else{
    echo $conexionAbierta2->error;
}

cerrarConexion($conexionAbierta2);

if(isset($_POST['btnGuardar'])){

    $iden = $_POST["txtIden"];
    $Nombre = $_POST["txtNombre"];
    $Apellido1 = $_POST["txtApellido1"];
    $Apellido2 = $_POST["txtApellido2"];
    $FechaNac = $_POST["txtFechaNac"];
    $Correo = $_POST["txtCorreo"];
    $Telefono = $_POST["txtTelefono"];
    $Contrasenna = $_POST["txtClave"];

    $objetoUsuario = new Usuario();

    $objetoUsuario->setIden($iden);
    $objetoUsuario->setNombre($Nombre);
    $objetoUsuario->setApellido1($Apellido1);
    $objetoUsuario->setApellido2($Apellido2);

    $conexionAbierta = IniciarConexion();

    $responseUpdate = actualizaUsuario($objetoUsuario);

    if($responseUpdate !== ""){

        date_default_timezone_set('America/Los_Angeles');

        $fechaActual = date("Y-m-d");
        $fechaCorrecta = date("Y-m-d", strtotime($fechaActual. "- 1 days")) . " " . date("h:i:s A");

        $file = fopen("logErrores.txt", "w");

        fwrite($file, "---------------------" . PHP_EOL);
        fwrite($file, "Error: ". $responseUpdate . PHP_EOL);
        fwrite($file, "Usuario: ". $_SESSION["Cedula"] . PHP_EOL);
        fwrite($file, "Fecha: ". $fechaCorrecta . PHP_EOL);
        fwrite($file, "Vista: ". $_SERVER['PHP_SELF'] . PHP_EOL);
        fwrite($file, "---------------------" . PHP_EOL);

        fclose($file);

        echo '<script> alert("Sucedió un error al actualizar el usuario."); </script>';

    }else{

        echo '<script> alert("Se ha actualizado el usuario exitosamente."); </script>';

    }

    /*$consulta = "UPDATE T_Clientes SET Nombre = '".$Nombre."', Apellido1 = '".$Apellido1."', Apellido2 = '".$Apellido2."', 
    FechaNac = '".$FechaNac."', correo = '".$Correo."', Telefono = '".$Telefono."', Contrasenna = md5('".$Contrasenna."') WHERE id = '".$iden."' ";

    $resultadoUpdate = $conexionAbierta -> query($consulta);

    if($resultadoUpdate){

        echo '<script> alert("Se ha actualizado el usuario exitosamente."); </script>';
        echo '<script> window.location.href = "listaClientes.php" </script>';

    }else{
        echo $conexionAbierta->error;
    }*/

    cerrarConexion($conexionAbierta);

}


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

<form method="post">

    <div class="row m-5 p-5 border">


<div class="col-lg-12 mb-3 text-center">
    <h3>PHP Intermedio - 5to Periodo</h3>
</div>

<div class="col-lg-6 mb-3">
    <label for="">Identificación</label>
    <input type="text" maxlength="9" value=<?php echo $personaEncontrada["id"] ?> readonly required class="form-control" name="txtIden" id="txtIden">
</div>

<div class="col-lg-6 mb-3">
    <label for="">Nombre</label>
    <input type="text" required value=<?php echo $personaEncontrada["Nombre"] ?> class="form-control" name="txtNombre" id="txtNombre">
</div>

<div class="col-lg-6 mb-3">
    <label for="">Primer Apellido</label>
    <input type="text" required class="form-control" value=<?php echo $personaEncontrada["Apellido1"] ?> name="txtApellido1" id="txtApellido1">
</div>

<div class="col-lg-6 mb-3">
    <label for="">Segundo Apellido</label>
    <input type="text" required class="form-control" value=<?php echo $personaEncontrada["Apellido2"] ?> name="txtApellido2" id="txtApellido2">
</div>

<div class="col-lg-6 mb-3">
    <label for="">Correo</label>
    <input type="mail" required class="form-control" value=<?php echo $personaEncontrada["correo"] ?> name="txtCorreo" id="txtCorreo">
</div>

<div class="col-lg-6 mb-3">
    <label for="">Fecha Nacimiento</label>
    <input type="date" required class="form-control" value=<?php echo $personaEncontrada["fechaNac"] ?> name="txtFechaNac" id="txtFechaNac">
</div>

<div class="col-lg-6 mb-3">
    <label for="">Teléfono</label>
    <input type="number" required onkeypress="return isNumber(event)" value=<?php echo $personaEncontrada["Telefono"] ?> class="form-control"
        name="txtTelefono" id="txtTelefono">
</div>

<div class="col-lg-6 mb-3">
    <label>Contraseña</label>
    <input type="password" id="txtClave" name="txtClave"
        required="required" class="form-control">
</div>

<div class="col-lg-12 text-end">
<input type="submit" class="btn btn-success" id="btnGuardar" name="btnGuardar" value="Actualizar Usuario">

    </form>
</div>
            <!--
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
            
-->
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