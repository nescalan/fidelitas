<?php

class Coche
{
    protected $model, $vendor;

    function __construct($model, $vendor)
    {
        $this->model = $model;
        $this->vendor = $vendor;
    }

    public function modelo()
    {
        echo $this->model . "<br>";
        return $this;
    }
    public function marca()
    {
        echo $this->vendor . "<br>";
        return $this;
    }

    public function encerar()
    {
        echo "Coche encerado.\n";
        return $this;
    }
}
//ejemplo llamada a los métodos encadenados
$coche = new Coche("Sentra B17", "Nissan");
$coche->modelo()->marca();
?>