<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

$conexion = mysqli_connect("localhost", "root", "Fide123*", "bd_ajax");
$conexion->set_charset("utf8");

$sql = "INSERT INTO clientes VALUES ('$nombre', '$correo', $id, '$telefono')";

if (mysqli_query($conexion, $sql)) {
    echo "Nuevo registro creado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>