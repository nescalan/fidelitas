<?php //index.php
require_once "./connection/connection.php";

$pagina = isset($_GET["pagina"]) ? (int) $_GET["pagina"] : 1;
$postPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

// CONSULTA SQL: vamos a traer los articulos
$queryArticulos = "SELECT  * FROM articulos LIMIT $inicio, $postPorPagina";
$articulos = $connection->query($queryArticulos);

// CONTANDO: numero total de articulos contenidos en la tabla
$tblArticulos = "SELECT * FROM articulos";

if ($result = mysqli_query($connection, $tblArticulos)) {

    // RETORNA: numero de filas
    $rowcount = mysqli_num_rows($result);

    // IMPRIME: resultado por pantalla
    // printf("Total rows in this table :  %d\n", $rowcount);
}

$numeroPaginas = ceil($rowcount / $postPorPagina);

// CONDICIONAL: si no hay articulos regresa al inicio
if ($pagina > $numeroPaginas) {
    header("Location: ./index.php");
}

require_once "index.view.php";
?>