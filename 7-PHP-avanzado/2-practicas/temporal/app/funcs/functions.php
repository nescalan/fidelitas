<?php // functions.php

function getUsers($identificacion, $contrasenna, $dbConnection)
{
    $query =
        "SELECT * 
        FROM Clientes_EJ2 
        WHERE identificacion = '" . $identificacion . "' AND Contrasenna = md5('" . $contrasenna . "')";

    // Send query
    $resultQuery = mysqli_query($dbConnection, $query);

    return $resultQuery;
}


?>