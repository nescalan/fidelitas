<?php


// STATIC: permite acceder a propiedades o metodos sin necesidad de crear una instancia de la clase
// solamente debemos llamar la clase y colocar doble :: para acceder a lo que necesitamos
class Persona
{
    public static $dia = "18 de Noviembre";

    public static function saludo()
    {
        return "Hola, buen dia";
    }
}

echo Persona::$dia;
echo Persona::saludo();

?>