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
    $respuesta = "Error en la conexión a la base de datos";
} else {
    // Verificar si el ID ya existe en la tabla "favorites".
    $idExistQuery = "SELECT id FROM favorites WHERE id = '$id'";
    $result = $conexion->query($idExistQuery);

    if ($result->num_rows > 0) {
        // $respuesta = "El ID ya existe en la base de datos";
        $respuesta = "   
        <div class='alert alert-danger mt-3 text-center' role='alert'>
        <strong>Error!</strong> <br />The Pokémon already exists in the favorites list
        </div>";
    } else {
        // Prepara la consulta de inserción SQL.
        $insertFavorite = "INSERT INTO favorites (id, name, type, ability, attack, speed)
        VALUES ('$id', '$name', '$type', '$ability', '$attack', '$speed')";

        // Verifica si la consulta se ejecutó correctamente.
        if ($conexion->query($insertFavorite) === TRUE) {
            $respuesta = "   
            <div class='alert alert-success mt-3 text-center' role='alert'>
            <strong>Success!</strong> <br />Record inserted successfully
            </div>";
        } else {
            $respuesta = "   
            <div class='alert alert-danger mt-3 text-center' role='alert'>
            <strong>Error!</strong> <br />Cannot insert record
            </div>";
        }
    }
}

// Cierra la conexión a la base de datos.
$conexion->close();

// Devuelve la respuesta al cliente.
echo $respuesta;
?>