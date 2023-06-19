<?php # viviendas.php

require_once "./src/model/connection-db.model.php";

$connection = openConnection();

# Check the db connection
if ($connection->connect_errno) {
    // The page die
    die("Lo siento, hay un problema con el servidor.");
} else {
    // Select all items from table inquilinos
    $sqlHomes = "SELECT * FROM viviendas";

    // Executes the query connection
    $result = $connection->query($sqlHomes);

    # Check errors on the last query
    if (!$result) {
        die($connection->error);
    }
}

# CONDITIONAL: Check if method post was used
if (isset($_POST['btn-add-home'])) {
    // Read the form the "Agregar Inquilinos" form
    $idHome = $_POST['id-home'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];

    // Prepare the SQL statement
    $sqlAddHome = "INSERT INTO viviendas (numero_casa, direccion, telefono, estado) 
        VALUES ($idHome, '$address', '$phone', '$state');";

    // Execute the SQL statement
    $addResult = mysqli_query($connection, $sqlAddHome);

    // Check the result
    if ($addResult === true) {
        echo "New record created successfully";
        echo '<script> window.location.href = "viviendas.php" </script>';
    } else {
        echo "Error: " . $sqlAddHome . "<br>" . $connection->error;
        echo "The data was not inserted successfully.";
    }
}

// Close database connection
closeConnection($connection);

require_once "./src/views/viviendas/viviendas.view.php";

?>