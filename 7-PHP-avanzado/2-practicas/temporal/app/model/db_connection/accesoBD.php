<?php //Connection.model.php

class Connection
{
    # Properties
    private $host;
    private $user;
    private $pass;
    private $db;

    # Contructor Method
    public function __construct($pHost, $pUser, $pPass, $pDB)
    {
        $this->host = $pHost;
        $this->user = $pUser;
        $this->pass = $pPass;
        $this->db = $pDB;
    }

    # Method Create Connection
    public function openConnection()
    {
        $mysqli = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );

        return $mysqli;
    }

    #Method close connection
    public function closeConnection($pDBConnection)
    {
        mysqli_close($pDBConnection);
    }
}


?>