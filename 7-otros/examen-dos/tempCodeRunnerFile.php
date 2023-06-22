<?php

function operacione($valor1, $valor2, $valor3)
{
    $resultado = 0;
    if ($valor1 != 0) {
        if ($valor1 == 1) {
            $resultado = $valor2 * $valor3;
        } elseif ($valor1 === 2) {
            $resultado = $valor2 + $valor3;
        } else if ($valor1 == 3) {
            $resultado = $valor1 - $valor3;
        }
    } else {
        $resultado = -1;
    }
    return $resultado;
}

echo operaciones("3", 350, 125);

?>