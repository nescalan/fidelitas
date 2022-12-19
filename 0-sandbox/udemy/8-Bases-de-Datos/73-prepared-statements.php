<?php

// Declaracion de variables
$servername = "localhost";
$username = "root";
$password = "4u3p7px6";
$dbname = "prueba_datos";
$id = $_GET["id"];


try {

    // CONEXION: Creando la conexion
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "Conexión Realizada con Exito <br />";

    // CONSULTA: prepared statements
    // $resultados = $conexion->query("SELECT * FROM Usuarios2");
    // $resultados = $conexion->prepare('SELECT * FROM Usuarios');
    $stmt = $conn->prepare("SELECT * FROM Usuarios");


    // DATOS: Capturamos los datos de la BBDD
    // $resultados = $statement->fetchAll();
    foreach ($resultados as $usuario) {
        print_r($usuario);
    }


    // IMPRESION: usuarios consultados
    /*foreach ($resultados as $fila) {
    // print_r($fila);
    echo $fila["nombre"] . "<br />";
    }
    */

} catch (PDOException $error) {
    //Mensaje de error
    echo "Error, no hay conexión: " . $error->getmessage();
}

?>