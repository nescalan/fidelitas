<?php

// NOTA: Las clases abstractas solamente pueden ser accedidas si son heredadas por otras clases


abstract class Persona
{
    public function saludo()
    {
        return "hola";
    }
}

class Estudiante extends Persona
{

}

$nelson = new Estudiante;
echo $nelson->saludo();

?>