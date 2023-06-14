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
    // Prepare the statement
    $stmt = $connection->prepare("SELECT * FROM inquilinos WHERE id = ?");
    $stmt->bind_param("s", $tenantID);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check errors on the last query
    if (!$result) {
        die($connection->error);
    } else {
        // Check result >0
        if ($result->num_rows > 0) {
            $tenantFound = $result->fetch_array(MYSQLI_ASSOC);
        } else {
            // Error message
            echo "Su consulta no puede ser realizada";
        }
    }
}

if (isset($_POST['btn-update-guest'])) {
    // Retrieve form data
    $idNumber = $_POST['id-number'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];

    // Prepare the statement
    $stmt = $connection->prepare("UPDATE inquilinos SET cedula = ?, nombre = ?, telefono = ?, estado = ? WHERE id = ?");
    $stmt->bind_param("sssss", $idNumber, $fullname, $phone, $state, $tenantID);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Redirect to a success page or display a success message
        echo '<script> window.location.href = "./inquilinos.php"  </script>';
    } else {
        die($connection->error);
    }
}

$stmt->close();
closeConnection($connection);

require_once "./src/views/inquilino-editar.view.php";

?>