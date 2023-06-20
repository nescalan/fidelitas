<?php

// VARIABLES: Declaration
$tenantID = $_GET['id'];
$errorMessage = $successMessage = "";

# DATABASE: Connection
require "./src/model/connection-db.model.php";
$connection = openConnection();

# Check dB connection
if ($connection->connect_errno) {
    // The page die
    die("Lo siento, hay un problema con el servidor.");
} else {
    // Select items from table inquilinos
    $sqlTenants = "SELECT * FROM inquilinos WHERE id = $tenantID";

    // Executes the query connection
    $result = $connection->query($sqlTenants);

    // Check errors on the last query
    if (!$result) {
        die($connection->error);
    } else {
        // Check result > 0
        if (mysqli_num_rows($result) > 0) {
            $tenantFound = mysqli_fetch_array($result);
        } else {
            // Error message
            echo "Su consulta no puede ser realizada";
        }
    }

    // Check if btn-update isset
    if (isset($_POST["btn-update"])) {
        // echo "Boton <Update> ha sido pulsado <br/>";

        # Get variables
        $systemID = $tenantFound['id'];
        $idNumber = $_POST['id-number'];
        $fullName = $_POST['fullname'];
        $phone = $_POST['phone'];
        $state = $_POST['state'];


        // Check if the variables are empty
        if (empty($systemID) || empty($idNumber) || empty($fullName) || empty($phone) || empty($state)) {
            // Message error
            $errorMessage .= "* Debe llenar todos los campos.";
        } else {
            // Query to select user by id and password from database
            $queryUpdate = "UPDATE inquilinos SET cedula=$idNumber, nombre='$fullName', telefono='$phone', estado='$state' WHERE id = $systemID";
            $result = mysqli_query($connection, $queryUpdate);

            // NEW CODE:
            // Select items from table inquilinos
            $sqlTenants = "SELECT * FROM inquilinos WHERE id = $tenantID";

            // Executes the query connection
            $result = $connection->query($sqlTenants);

            // Check errors on the last query
            if (!$result) {
                die($connection->error);
            } else {
                // Check result > 0
                if (mysqli_num_rows($result) > 0) {
                    $tenantFound = mysqli_fetch_array($result);
                } else {
                    // Error message
                    echo "Su consulta no puede ser realizada";
                }
            }

            // Success message
            $successMessage .= "<p class='text-center text-white p-2'>El inquilino se actualizó correctamente.</p>";
        }
    }

}


// Open connnection
closeConnection($connection);



require_once "./src/views/inquilinos/inquilino-edit.view.php";

?>