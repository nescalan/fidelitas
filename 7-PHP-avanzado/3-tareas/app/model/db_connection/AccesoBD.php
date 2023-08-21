<?php // accesoBD.php

class AccesoBD
{
    // Variables
    private $servername;
    private $username;
    private $password;
    private $database;

    // Construct Method
    public function __construct($host, $user, $pwd, $database)
    {
        $this->servername = $host;
        $this->username = $user;
        $this->password = $pwd;
        $this->database = $database;
    }

    // Create connection
    public function iniciarConexion()
    {
        $conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->database
        );

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    function cerrarConexion($conexion)
    {

        mysqli_close($conexion);

    }
}

?>