<?php

// VARIABLES: Declaration
$homeID = $_GET['id'];
$errorMessage = $successMessage = "";

# DATABASE: Connection
require "./src/model/connection-db.model.php";
$connection = openConnection();

# Check dB connection
if ($connection->connect_errno) {
    // The page die
    die("Lo siento, hay un problema con el servidor.");
} else {
    // Select items from table viviendas
    $sqlHomes = "SELECT * FROM viviendas WHERE id = $homeID";

    // Executes the query connection
    $result = $connection->query($sqlHomes);

    // Check errors on the last query
    if (!$result) {
        die($connection->error);
    } else {
        // Check result > 0
        if (mysqli_num_rows($result) > 0) {
            $homeFound = mysqli_fetch_array($result);
        } else {
            // Error message
            echo "Su consulta no puede ser realizada";
        }
    }

    // Check if btn-update isset
    if (isset($_POST["btn-update"])) {
        // echo "Boton <Update> ha sido pulsado <br/>"

        # Get variables
        $systemID = $homeFound['id'];
        $idHome = $_POST['id-home'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $state = $_POST['state'];


        // Check if the variables are empty
        if (empty($systemID) || empty($idHome) || empty($address) || empty($phone) || empty($state)) {
            // Message error
            $errorMessage .= "* Debe llenar todos los campos.";
        } else {
            // Query to select user by id and password from database
            $queryUpdate = "UPDATE viviendas SET cedula=$idHome, nombre='$address', telefono='$phone', estado='$state' WHERE id = $systemID";
            $result = mysqli_query($connection, $queryUpdate);

            // NEW CODE:
            // Select items from table viviendas
            $sqlHomes = "SELECT * FROM viviendas WHERE id = $homeID";

            // Executes the query connection
            $result = $connection->query($sqlHomes);

            // Check errors on the last query
            if (!$result) {
                die($connection->error);
            } else {
                // Check result > 0
                if (mysqli_num_rows($result) > 0) {
                    $homeFound = mysqli_fetch_array($result);
                } else {
                    // Error message
                    echo "Su consulta no puede ser realizada";
                }
            }

            // Success message
            $successMessage .= "<p class='text-center text-white p-2'>El usuario se actualizó correctamente.</p>";
        }
    }

}

print_r($homeFound);

// Open connnection
closeConnection($connection);



require_once "./src/views/viviendas/vivienda-edit.view.php";

?>