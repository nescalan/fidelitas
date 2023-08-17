<?php #Connection.php

class Connection
{
    # Properties 
    protected $host; // Host name or IP address of the database server
    protected $user; // Username to access the database with read/write privileges
    protected $password; // Password for that user account
    protected $db; // Name of the database we are connecting to

    # Constructor Method
    public function __construct($host, $user, $password, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
    }

    # Create connection
    public function openConnection()
    {
        $mysqli = mysqli_connect($this->host, $this->user, $this->password, $this->db);

        if ($mysqli->connect_error) {
            throw new Exception("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }

    # Close connection
    public function closeConnection($pDBConnection)
    {
        mysqli_close($pDBConnection);
    }


}
?>