<?php # configuracion.php

session_start();

if (isset($_SESSION['user'])) {

    // VARIABLES: Declaration
    $errorMessage = "";

    require_once "./src/model/connection-db.model.php";

    $connection = openConnection();

    # Check the db connection
    if ($connection->connect_errno) {
        // The page die
        die("Lo siento, hay un problema con el servidor.");
    } else {
        // Select the user from table users
        $sessionUser = $_SESSION['user'];
        $sqlUser = "SELECT * FROM usuarios WHERE usuario = '$sessionUser' ";

        // Executes the query connection
        $result = $connection->query($sqlUser);

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
        $state = $_POST['state'];

        // Prepare the SQL statement
        $sqlAddGuest = "INSERT INTO inquilinos (cedula, nombre, telefono, estado) 
    VALUES ($idNumber, '$fullname', '$phone', '$state');";

        // Execute the SQL statement
        $addResult = mysqli_query($connection, $sqlAddGuest);

        // Check the result
        if ($addResult === true) {
            echo "New record created successfully";
            echo '<script> window.location.href = "inquilinos.php" </script>';
        } else {
            echo "Error: " . $sqlAddGuest . "<br>" . $connection->error;
            echo "The data was not inserted successfully.";
        }
    }

    // Close database connection
    require_once "./src/views/configuracion/configuracion.view.php";

    closeConnection($connection);

} else {
    # Redirect to login.php
    header('Location: login.php');
}



?>