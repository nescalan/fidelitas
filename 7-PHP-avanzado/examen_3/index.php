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


// session_start();
// $_SESSION["ID_Producto"] = 309696;
// $_SESSION["Id_Persona"] = "AC85458ds";
// $_SESSION["ID_Sucursal"] = 54848;
// $_SESSION["Id_Categoria"] = "hgdsdadSDS9D4848";
// $_SESSION["ID_Rol"] = 484848;
// $_SESSION["Id_Tienda"] = 87844;
// $_SESSION["ID_Vendedor"] = "AD4451SDS8";
// $_SESSION["Id_Dispositivo"] = "0";

// echo $_SESSION["ID_Producto"] * $_SESSION["Id_Sucursal"];


// function operaciones($valor1, $valor2, $valor3)
// {
//     $resultado = 0;
//     if ($valor1 != 0) {
//         if ($valor1 == 1) {
//             $resultado = $valor2 * $valor3;
//         } elseif ($valor1 === 2) {
//             $resultado = $valor2 + $valor3;
//         } else if ($valor1 == 3) {
//             $resultado = $valor1 - $valor3;
//         }
//     } else {
//         $resultado - 1;
//     }
//     return $resultado;
// }

// echo operaciones('2', 350, 125);

// setcookie("cUsuario", $personaEncontrada["Nombre"], time() + 25 * 24 * 60 * 60);

?>