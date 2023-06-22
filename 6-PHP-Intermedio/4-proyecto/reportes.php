<?php # reportes.php

session_start();

if (isset($_SESSION['user'])) {

    require_once "./src/views/reportes/reportes.view.php";


} else {
    # Redirect to login.php
    header('Location: login.php');
}



?>