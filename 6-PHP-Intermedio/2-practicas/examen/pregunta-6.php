<?php

function calculaIVA($monto)
{
    if ($monto > 0) {
        # code...
        $iva = 13;
        $montoIVA = ($monto * $iva) / 100;

        return $monto + $montoIVA;
    } else {
        return 0;
    }
}

echo calculaIVA(100);

?>