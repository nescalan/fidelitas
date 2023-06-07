<?php

function operaciones($n1, $n2, $operacion)
{
    $resultado = 0;
    if ($operacion === 2) {
        $resultado = $n1 - $n2;
    }

    return $resultado;
}


echo operaciones(350, 125, '2');
echo "Hola";

?>