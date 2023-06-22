<?php #registrar-visita.php

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
        // Select all items from table visitas
        // $sqlVisitors = "SELECT * FROM visitas";
        $sqlVisitors = "SELECT 
            rep.id AS Visita_No, 
            vis.fecha_ingreso AS Ingreso, 
            vis.hora_ingreso AS Hora_Ingreso,
            con.nombre AS Residente,
            viv.numero_casa AS Vivienda,
            vis.observaciones AS observaciones
        FROM reportes rep
        INNER JOIN visitas vis ON rep.visita_id = vis.id
        INNER JOIN inquilinos con ON rep.visita_id = con.id
        INNER JOIN viviendas viv ON rep.vivienda_id = viv.id
        WHERE vis.fecha_ingreso = '2023-05-01'; ";

        // Executes the query connection
        $result = mysqli_query($connection, $sqlVisitors);
        print_r($result);

        // $result = $connection->query($sqlVisitors);

        # Check errors on the last query
        if (!$result) {
            die($connection->error);
        }
    }

    # CONDITIONAL: Check if method post was used
    if (isset($_POST['btn-add-guest'])) {
        // Read the form the "Agregar visitas" form
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
    closeConnection($connection);

    require_once "./src/views/visitas/registrar-visita.view.php";


} else {
    # Redirect to login.php
    header('Location: login.php');
}


?>