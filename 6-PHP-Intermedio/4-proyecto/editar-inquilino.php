<?php

// VARIABLES: Declaration
$id = $_GET['id'];

// DATABASE: Connection
require "./src/model/connection-db.model.php";

$connection = openConnection();

# Check dB connection
if ($connection->connect_errno) {
    // The page die
    die("Lo siento, hay un problema con el servidor.");
} else {
    // Select items from table inquilinos
    $sqlTenants = "SELECT * FROM inquilinos WHERE id = $id";

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

    closeConnection($connection);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-add-guest'])) {
    // Retrieve form data
    $idNumber = $_POST['id-number'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];

    // Perform guest edit logic
    // ...

    // Redirect to a success page or display a success message
    // ...
}
require_once "./src/views/editar-inquilino.view.php";

?>