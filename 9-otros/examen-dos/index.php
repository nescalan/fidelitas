<?php

class Automovil
{
    public $Placa;
    public $Color;
    public $Kilometraje;
    public $Anio;

    public function __construct($pPlaca, $pColor, $pKilometraje, $pAnio)
    {
        $this->Color = $pAnio;
        $this->Placa = $pPlaca;
        $this->Anio = $pKilometraje;
        $this->Kilometraje = $pColor;
    }
}

$objetoAuto = new Automovil("Rojo", "2022", "12000kms", "BBB-999");
print_r($objetoAuto);


$Apellido1 = "Ramirez";
$Apellido2 = "Granados";

echo $Apellido1 . '' . $Apellido;


// ------------------------------------
class Pintura
{
    public $Marca;
    public $Color;
    public $Tamanno;
    public $pSuperficie;

    public function __construct($pMarca, $pColor, $pTamanno, $pSuperficie)
    {
        $this->Marca = $pMarca;
        $this->Color = $pColor;
        $this->Tamanno = $pTamanno;
        $this->Superficie = $pSuperficie;
    }
}

$objetoPintura = new Pintura("Lanco", "Rojo", "Mediana");
echo $objetoPintura;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Soy Examen</h1>
</body>

</html>