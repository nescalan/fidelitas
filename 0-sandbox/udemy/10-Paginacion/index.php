<?php

require_once "./model/login.php";

$connection = new mysqli(
	$db_hostname,
	$db_username,
	$db_password,
	$db_database
);

// CONDITIONAL: checking connection
if ($connection) {
	echo "All good";
} else {
	echo "Sorry we are having problems with the conexion";
}



require './index.view.php';

?>