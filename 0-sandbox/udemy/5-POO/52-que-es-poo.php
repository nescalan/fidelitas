<?php

// Declaracion de clases (POO)
class Persona
{
    // propiedades
    public $nombre;
    public $edad;
    public $pais;


    // metodos
    public function mostrarInformacion()
    {
        echo "Hola  Mundo";
    }
}

// Instanciación
$carlos = new Persona;

$carlos->$nombre = "Carlos Arturo";
$carlos->$edad = 23;
$carlos->$pais = "Mexico";

// $carlos->mostrarInformacion();

// Instanciación
$alejandro = new Persona;

$alejandro->$nombre = "alejandro fernandez";
$alejandro->$edad = 39;
$alejandro->$pais = "Costa Rica";

?>