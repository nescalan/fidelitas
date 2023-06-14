<?php

// VARIABLES: Declaration
$tenantID = $_GET['id'];

// DATABASE: Connection
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
        // Check result >0
        if (mysqli_num_rows($result) > 0) {
            $tenantFound = mysqli_fetch_array($result);
        } else {
            // Error message
            echo "Su consulta no puede ser realizada";
        }
    }

}


if (isset($_POST['btn-add-guest'])) {
    // Retrieve form data
    $idNumber = $_POST['id-number'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];

    // Perform update for table inquilinos
    $sqlTenantsUpdate = "UPDATE inquilinos SET cedula = '" . $idNumber . "', nombre = '" . $fullname . "', telefono = '" . $phone . "', estado ='" . $state . "' WHERE id = '" . $id . "' ";

    // Executes the query connection
    $resultUpdate = $connection->query($sqlTenantsUpdate);

    if ($resultUpdate) {
        // Redirect to a success page or display a success message
        echo '<script> window.location.href = "./inquilinos.php"  </script>';
    } else {
        die($connection->error);
    }
}
closeConnection($connection);

require_once "./src/views/inquilino-editar.view.php";

?>