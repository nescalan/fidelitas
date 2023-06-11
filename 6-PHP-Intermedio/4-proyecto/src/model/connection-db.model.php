<?php #connectionDB.php
# FUNCTION: Opens new connection to db
function openConnection()
{
    // Variables declaration to connect with mysqli
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "axioma";

    // Create MySqli connection
    $connection = mysqli_connect($host, $user, $password, $database);

    // Returns the connection
    return $connection;

}

# FUNCTION: Close the dB connection
function closeConnection($connection)
{
    mysqli_close($connection);
    // $connection->close();
}