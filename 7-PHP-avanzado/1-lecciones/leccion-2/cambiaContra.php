<?php

include 'accesoBD.php';

$id = $_GET['id'];

if(isset($_POST["btnActualizar"])){

    $contrasenna = $_POST["txtActual"];
    $contrasennaNueva = $_POST["txtNueva"]; 
    $contrasennaConfirma = $_POST["txtConfirma"];

    $conexionAbierta = IniciarConexion();

    $consulta = "SELECT * FROM T_Clientes WHERE id = '".$id."' AND contrasenna = md5('".$contrasenna."')";

    $resultado = $conexionAbierta->query($consulta);

    if(mysqli_num_rows($resultado) === 0){
        echo '<script> alert("La contraseña actual es incorrecta."); </script>';
    }else{

        if($contrasennaNueva === $contrasennaConfirma){

            $queryUpdate = "UPDATE T_Clientes SET contrasenna = md5('".$contrasennaNueva."') WHERE id = '".$id."'";

            $resultadoUpdate = $conexionAbierta->query($queryUpdate);

            if($resultadoUpdate){
                echo '<script> alert("La contraseña del usuario fue modificada exitosamente."); </script>';
            }else{
                echo $conexionAbierta->error;
            }

        }else{
            echo '<script> alert("La nueva contraseña y la confirmación no coinciden."); </script>';
        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
</head>
<body>

<?php include 'menu.php'; ?>

<form method="post" class="p-5">

<div class="row m-5 p-5 border">
    

<div class="col-lg-12 mb-3 text-center" >
        <h3>Cambiar Contraseña</h3>
</div>

    <div class="col-lg-12 mb-3">
        <label for="">Confirmar Contraseña Actual</label>
        <input required maxlength="9" type="text" class="form-control" name="txtActual" id="txtActual">
    </div>

    <div class="col-lg-12 mb-3">
        <label for="">Nueva Contraseña</label>
        <input required type="text" class="form-control" name="txtNueva" id="txtNueva">
    </div>

    <div class="col-lg-12 mb-3">
         <label for="">Confirmar Nueva Contraseña</label>
        <input required type="text" class="form-control" name="txtConfirma" id="txtConfirma">
    </div>


    <div class="col-lg-12 text-end">
        <input type="submit" class="btn btn-success" name="btnActualizar" id="btnActualizar" value="Actualizar Contraseña">
    </div>

    </div>
   
</form>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>