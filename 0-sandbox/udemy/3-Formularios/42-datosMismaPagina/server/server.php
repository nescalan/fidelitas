<?php

if (!$_POST) {
    header('Location: http://localhost/fidelitas/0-sandbox/udemy/41-datosDesdeForm.php/');
}
$nombre = $_POST["firstName"];
$sexo = $_POST["sexo"];
$terms = $_POST["terms"];
echo "Hola $nombre eres $sexo";

// Destructuración de $_POST


// Validando mi formulario con filtar_var()

// print_r($_POST);

?>