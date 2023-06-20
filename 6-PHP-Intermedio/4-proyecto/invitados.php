<?php # inquilinos.php

require_once "./src/model/connection-db.model.php";

$connection = openConnection();

# Check the db connection
if ($connection->connect_errno) {
    // The page die
    die("Lo sentimos, hay un problema con el servidor.");
} else {
    // Select all items from table inquilinos
    $sqlGuests = "SELECT * FROM invitados";

    // Executes the query connection
    $result = $connection->query($sqlGuests);

    # Check errors on the last query
    if (!$result) {
        die($connection->error);
    }

}

# CONDITIONAL: Check if method post was used
if (isset($_POST['btn-add-guest'])) {
    // Read the form the "Agregar Inquilinos" form
    $idNumber = $_POST['id-number'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $access = $_POST['access'];

    // Prepare the SQL statement
    $sqlAddGuest = "INSERT INTO invitados (cedula, nombre, telefono, acceso) 
        VALUES ($idNumber, '$fullname', '$phone', '$access');";

    // Execute the SQL statement
    $addResult = mysqli_query($connection, $sqlAddGuest);

    // Check the result
    if ($addResult === true) {
        echo "New record created successfully";
        echo '<script> window.location.href = "invitados.php" </script>';
    } else {
        echo "Error: " . $sqlAddGuest . "<br>" . $connection->error;
        echo "The data was not inserted successfully.";
    }
}



closeConnection($connection);

require_once "./src/views/invitados/invitados.view.php";

?>