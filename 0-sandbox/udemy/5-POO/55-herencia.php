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
        return ($this->firstName . " has " . $this->edge . " years old and is from " . $this->country);
    }
}

// Class Instantiation
$nelson = new Person("Ing. Nelson Gonález", 47, "Costa Rica");
$son = new Person("Marco G.R.", 5, "Italia");


// Llamada a la funcion para mostrar informacion
echo $nelson->mostrarInformacion();
echo "<br />";
echo $son->mostrarInformacion();


class Student extends Person
{
    // constructor method
    function __construct($firstName, $edge, $country, $collegeCareer)
    {
        // This is the shortcut for parent "constructor"
        parent::__construct($firstName, $edge, $country);
        $this->$collegeCareer;
    }
}

$jorge = new Student("Jorge BA", 37, "Peru", "WordPress");
$jorge->mostrarInformacion();