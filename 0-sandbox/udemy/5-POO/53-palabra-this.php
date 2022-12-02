<?php

// Declaracion de clases (POO)
class Person
{
    // propiedades
    public $firstName, $edge, $country;

    public function mostrarInformacion()
    {
        echo ($this->firstName . " has " . $this->edge . " years old and is from " . $this->country);
    }
}

// Instanciación de Clases
$carlos = new Person;
$carlos->firstName = "Ing. Nelson González";
$carlos->edge = 47;
$carlos->country = "Italia";



// Llamada a la funcion para mostrar informacion
$carlos->mostrarInformacion();
?>