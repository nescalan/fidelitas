<?php

class Persona
{
    // Propierties
    public $nombre;
    public $edad;
    public $pais;

    // Methods
    public function mostrarInformacion()
    {
        echo "\nHola Persona ";

    }
}

$nelson = new Persona();
$nelson->nombre = "Nelson Gonzalez";
print_r($nelson->nombre);

$marco = new Persona();
$marco->nombre = "Marco";
$marco->edad = 5;
$marco->pais = "Italia";

$marco->mostrarInformacion();