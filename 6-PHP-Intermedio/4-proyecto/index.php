<?php #index.php

session_start();

if (isset($_SESSION['user'])) {
    header('Location: actividad.php');
} else {
    header('Location: signup.php');
}


require_once "./login.php";
// require_once "./actividad.php";

?>