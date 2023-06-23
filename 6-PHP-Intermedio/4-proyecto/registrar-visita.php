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
        // Select all items from table inquilinos
        $sqlGuests = "SELECT * FROM invitados";

        // Executes the query connection
        $resultGuests = $connection->query($sqlGuests);

        // Check errors on the last query
        if (!$resultGuests) {
            die($connection->error);
        }



        // Select all items from table visitas
        $sql = "SELECT * FROM visitas";
        $sqlVisitors = "SELECT 
            vis.id AS vis_id, 
            inv.nombre AS invitado_id,
            viv.numero_casa AS vivienda_id,
            vis.hora_ingreso AS hora_ingreso,
            vis.observaciones AS observaciones
        FROM reportes rep
        INNER JOIN visitas vis ON rep.visita_id = vis.id
        INNER JOIN invitados inv ON rep.invitado_id = inv.id
        INNER JOIN viviendas viv ON rep.vivienda_id = viv.id
        WHERE vis.fecha_ingreso = '2023-05-01'; ";

        // Executes the query connection
        $result = mysqli_query($connection, $sqlVisitors);

        // while ($fila = mysqli_fetch_assoc($result)) {
        //     echo $fila["id"];
        //     echo '<br> ';
        //     echo $fila["invitado_id"];
        //     echo '<br> ';
        //     echo $fila["vivienda_id"];
        //     echo '<br> ';
        //     echo $fila["hora_ingreso"];
        //     echo '<br> ';
        //     echo $fila["observaciones"];
        // }


        // $resultArray = mysqli_fetch_assoc($result);
        // print_r($resultArray);

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