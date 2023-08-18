<?php //user.php

class User
{
    # properties
    private $id;
    private $pwd;

    # Method Constructor
    public function __construct($pID, $pPwd)
    {
        $this->id = $pID;
        $this->pwd = $pPwd;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get the value of password
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }
}


?>