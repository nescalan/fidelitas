<?php #registrar-visita.php

session_start();

if (isset($_SESSION['user'])) {

    require_once "./src/views/visitas/registrar-visita.view.php";


} else {
    # Redirect to login.php
    header('Location: login.php');
}


?>