<?php #cambiaContra.php

require_once "./accesoBD.php";

// Captura del id de usuario
$usuarioID = $_GET['id'];

echo $usuarioID;

require_once "./src/views/cambiaContra.view.php";

?>