<?php #cambiaContra.php

# Variables declaration
$errorMessage = $successMessage = "";

require_once "./accesoBD.php";

if (isset($_POST['old-password']) && isset($_POST['new-password']) && isset($_POST['new-password'])) {
    # Get variables
    $userID = $_GET['id'];
    $oldPass = $_POST['old-password'];
    $newPass = $_POST['new-password'];
    $confirmedPass = $_POST['confirmed-password'];

    if (empty($oldPass) || empty($newPass) || empty($confirmedPass)) {
        // Message error
        $errorMessage .= "Debe llenar todos los campos.";
    } else {
        // Database connection
        $connection = IniciarConexion();
        // Query to select user by id and password from database
        $query = "SELECT * FROM t_clientes WHERE id = $userID";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("No puede realizarse su consulta: " . $connection->error);
        }

        $row = mysqli_fetch_assoc($result);

        // Validate if old-password is the same on the db
        if ($row["Contrasenna"] != md5($oldPass)) {
            $errorMessage .= "La clave no corresponde a la del sistema";
        } else {
            // Validate if new-password and confirmed-pasword are the same
            if ($newPass === $confirmedPass) {
                // Query to Update Contrasenna with the new-pass
                $updateQuery = "UPDATE t_clientes SET Contrasenna=MD5('$newPass') WHERE id=$userID ";
                $result = mysqli_query($connection, $updateQuery);
                $successMessage .= "La clave se actualizó con éxito";
            } else {
                $errorMessage .= "Las nuevas claves no son iguales";
            }
        }
    }

}

require_once "./src/views/cambiaContra.view.php";




?>