<?php

class Usuario {

    public $iden;
    public $Nombre;
    public $Apellido1;
    public $Apellido2;

    public function __construct(){
        $this->iden = "";
        $this->Nombre = "";
        $this->Apellido1 = "";
        $this->Apellido2 = "";
    } 

    public function getiden(){
        return $this->iden;
    }

    public function setiden($piden){
        $this->iden = $piden;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function setNombre($pNombre){
        $this->Nombre = $pNombre;
    }

    public function getApellido1(){
        return $this->Apellido1;
    }

    public function setApellido1($pApellido1){
        $this->Apellido1 = $pApellido1;
    }

    public function getApellido2(){
        return $this->Apellido2;
    }

    public function setApellido2($pApellido2){
        $this->Apellido2 = $pApellido2;
    }

    protected function protectedConcatenaNombre($pNombre, $pApellido1, $pApellido2){
        return "El nombre concatenado por herencia es: ". $pNombre . " " . $pApellido1 . " " . $pApellido2 ;
    }

}

class PruebaHerencia extends Usuario{

    public function llamaHerencia(){
        return $this->protectedConcatenaNombre("Eduardo", "Reyes", "Torres");
    }

}

$instanciaObjeto = new PruebaHerencia();

echo $instanciaObjeto->llamaHerencia();

?>