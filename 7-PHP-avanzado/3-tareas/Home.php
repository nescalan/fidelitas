<?php
session_start();

if (!isset($_SESSION['identificacion'])) {
    header('Location: index.php');
} else {
    # code...
    $nombre = ucfirst($_SESSION['Nombre']);
    require_once 'app/views/home.view.php';
}


?>