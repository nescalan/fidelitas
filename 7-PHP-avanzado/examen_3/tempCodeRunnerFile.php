<?php
function validaError($pCodigo)
{
    if ($pCodigo == 404) {
        die("Página no encontrada");
    } elseif ($pCodigo === 500) {
        die("Error interno del servidor");
    } elseif ($pCodigo == 503) {
        die("Servicio no disponible");
    } else {
        die("Error desconocido");
    }
}


validaError('404');