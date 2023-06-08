<?php #connectionDB.php
# FUNCTION: Opens new connection to db
function openConnection()
{
    // Variables declaration to connect with mysqli
    $host = "localhost";
    $user = "root";
    $password = "4u3p7px6";
    $database = "axioma";

    // Create MySqli connection
    $connection = new mysqli($host, $user, $password, $database);

    // Returns the connection
    return $connection;

}

# FUNCTION: Close the dB connection
function closeConnection($connection)
{
    $connection->close();
}