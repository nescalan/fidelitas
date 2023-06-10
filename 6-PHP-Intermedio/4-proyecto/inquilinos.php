<?php # inquilinos.php

require_once "./src/model/connection-db.model.php";

$connection = openConnection();

# Check the db connection
if ($connection->connect_errno) {
    // The page die
    die("Lo siento, hay un problema con el servidor.");
} else {
    // Select all items from table inquilinos
    $sqlTenants = "SELECT * FROM inquilinos";

    // Executes the query connection
    $result = $connection->query($sqlTenants);

    # Check errors on the last query



    if (!$result) {
        die($connection->error);
    }

}

# CONDITIONAL: Check if method post was used
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Read the form the "Agregar Inquilinos" form
    $idNumber = $_POST['id-number'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];


    echo "Cedula: $idNumber | Nombre: $fullname | Tel: $phone | Estado: $state";

    // Prepare the SQL statement
    $sqlAddGuest = "INSERT INTO inquilinos (cedula, nombre, telefono, estado) 
    VALUES ($idNumber, '$fullname', '$phone', '$state');";

    // Execute the SQL statement
    $addResult = mysqli_query($connection, $sqlAddGuest);

    // Check the result
    if ($addResult === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
        echo "The data was not inserted successfully.";
    }

}


// Close database connection
// closeConnection($connection);
require_once "./src/views/inquilinos.view.php";
?>