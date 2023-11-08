<?php
// Obtiene datos del formulario.
$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$ability = $_POST['ability'];
$attack = $_POST['attack'];
$speed = $_POST['speed'];



// Establece la conexión con la base de datos.
$conexion = new mysqli('localhost', 'root', '4u3p7px6', 'pokemon');
$conexion->set_charset("utf8");

// Verifica si hay un error de conexión.
if ($conexion->connect_errno) {
    $inserFavorite = [
        'error' => true
    ];
} else {
    // Prepara la consulta de inserción SQL.
    $insertFavorite = "INSERT INTO favorites (id, name, type, ability, attack, speed)
    VALUES ('$id', '$name', '$type', '$ability', '$attack', '$speed')";

    // Verifica si la consulta se ejecutó correctamente.
    if (mysqli_query($conexion, $insertFavorite)) {
        echo "New record created successfully";
        $respuesta = true;
    } else {
        $respuesta = false;
    }

}

// Cierra la conexión a la base de datos.
mysqli_close($conexion);

?>