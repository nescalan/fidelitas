<?php

include 'BD/accesoBD.php';

if (isset($_POST['btnIniciarSesion'])) {

    $conexionAbierta = IniciarConexion();

    // Captura los valores del formulario
    $identificacion = $_POST['txtCedula'];
    $contrasenna = $_POST['txtClave'];

    $query = "SELECT * FROM Clientes_EJ2";
    $result = $conexionAbierta->query($query);
    $result = mysqli_fetch_assoc($result);

    print_r($result);


    // $consulta =
    //     "SELECT * 
    // FROM Clientes_EJ2 
    // WHERE identificacion = '" . $identificacion . "' AND Contrasenna = md5('" . $contrasenna . "')";

    // $resultado = $conexionAbierta->query($consulta);

    print_r($resultado);

    if (mysqli_num_rows($resultado) === 0) {
        echo '<script> alert("Verifique sus credenciales de acceso."); </script>';
    } else {

        $personaEncontrada = mysqli_fetch_array($resultado);
        echo '<script> location.replace("Home.php"); </script>';
    }

    CerrarConexion($conexionAbierta);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>

<body>

    <form action="" method="post">

        <section class="form-register p-5" data-aos="flip-left" data-aos-easing="ease-out-cubic"
            data-aos-duration="1000">
            <h4 class="mb-4">Ingresar a su Cuenta</h4>

            <div class="contenedor-inputs">

                <div id="page-content-wrapper">

                    <div class="container-fluid">

                        <div class="card-body">

                            <div class="row">

                                <div class="col-12">
                                    <label>Cédula</label>
                                    <input type="text" id="txtCedula" name="txtCedula" required="required"
                                        maxlength="12" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <label>Contraseña</label>
                                    <input type="password" id="txtClave" name="txtClave" maxlength="30"
                                        required="required" class="form-control">
                                </div>

                            </div>

                            <br>
                            <input button type="submit" id="btnIniciarSesion" name="btnIniciarSesion"
                                value="Iniciar Sesión" class="btn btn-success btn-block mt-3">
                            <br>

                        </div>

                    </div>

                </div>
            </div>
        </section>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

        <script>
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode < 48 || charCode > 57) {
                    return false;
                }
                return true;
            }

        </script>

    </form>

</body>

</html>