<?php

// Dlass Declaration
class Person
{
    // Properties
    public $firstName, $edge, $country;

    // constructor method
    function __construct($firstName, $edge, $country)
    {
        $this->firstName = $firstName;
        $this->edge = $edge;
        $this->country = $country;
    }

    public function mostrarInformacion()
    {
        echo ($this->firstName . " has " . $this->edge . " years old and is from " . $this->country);
        echo "<br />";
    }
}

// Class Instantiation
$nelson = new Person("Ing. Nelson Gonález", 47, "Costa Rica");
$son = new Person("Marco G.R.", 5, "Italia");


// Llamada a la funcion para mostrar informacion
$nelson->mostrarInformacion();
$son->mostrarInformacion();
?>