<?php

session_start();

if (isset($_SESSION['user'])) {

    // VARIABLES: Declaration
    $guestID = $_GET['id'];
    $errorMessage = $successMessage = "";

    # DATABASE: Connection
    require "./src/model/connection-db.model.php";
    $connection = openConnection();

    # Check dB connection
    if ($connection->connect_errno) {
        // The page die
        die("Lo siento, hay un problema con el servidor.");
    } else {
        // Select items from table invitados
        $sqlGuests = "SELECT * FROM invitados WHERE id = $guestID";

        // Executes the query connection
        $result = $connection->query($sqlGuests);

        // Check errors on the last query
        if (!$result) {
            die($connection->error);
        } else {
            // Check result > 0
            if (mysqli_num_rows($result) > 0) {
                $GuestFound = mysqli_fetch_array($result);
            } else {
                // Error message
                echo "Su consulta no puede ser realizada";
            }
        }

        // Check if btn-update isset
        if (isset($_POST["btn-update"])) {
            // echo "Boton <Update> ha sido pulsado <br/>";

            # Get variables
            $systemID = $GuestFound['id'];
            $idNumber = $_POST['id-number'];
            $fullName = $_POST['fullname'];
            $phone = $_POST['phone'];
            $access = $_POST['access'];


            // Check if the variables are empty
            if (empty($systemID) || empty($idNumber) || empty($fullName) || empty($phone) || empty($access)) {
                // Message error
                $errorMessage .= "* Debe llenar todos los campos.";
            } else {
                // Query to update data from invitados
                $queryUpdate = "UPDATE invitados SET cedula='$idNumber', nombre='$fullName', telefono='$phone', acceso='$access' WHERE id = $systemID";
                $result = mysqli_query($connection, $queryUpdate);

                // NEW CODE:
                // Select items from table invitados
                $sqlGuests = "SELECT * FROM invitados WHERE id = $guestID";

                // Executes the query connection
                $result = $connection->query($sqlGuests);

                // Check errors on the last query
                if (!$result) {
                    die($connection->error);
                } else {
                    // Check result > 0
                    if (mysqli_num_rows($result) > 0) {
                        $GuestFound = mysqli_fetch_array($result);
                    } else {
                        // Error message
                        echo "Su consulta no puede ser realizada";
                    }
                }

                // Success message
                $successMessage .= "<p class='text-center text-white p-2'>El invitado se actualizó correctamente.</p>";
            }
        }
    }

    // Open connnection
    closeConnection($connection);

    require_once "./src/views/invitados/invitado-edit.view.php";

} else {
    # Redirect to login.php
    header('Location: login.php');
}

?>