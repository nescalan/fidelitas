<?php #index.php

session_start();

if (isset($_SESSION['user'])) {
    # redirect to actividad.php
    header('Location: actividad.php');

} else {
    # Redirect to login.php
    header('Location: login.php');
}

?>