<?php
require 'funciones.php';

$fotos_por_pagina = 8;
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$connection = connection('galeria', 'root', '');

if (!$connection) {
  header('Location: error.php');
}

$statement = $connection->prepare("
SELECT SQL_CALC_FOUND_ROWS * FROM images LIMIT $inicio, $fotos_por_pagina
");

$statement->execute();
$fotos = $statement->fetchAll();

// echo '<pre>';
// print_r($fotos);
// echo '</pre>';

if (!$fotos) {
  header('Location: error.php');
}

$statement = $connection->prepare("SELECT FOUND_ROWS() AS total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);

require 'views/index.view.php';
