<?php
require 'admin/config.php';
require 'functions.php';

$connection = connection($bd_config);

if (!$connection) {
  header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
  $busqueda = limpiarDatos($_GET['busqueda']);

  $statement = $connection->prepare(
    'SELECT * FROM posts WHERE title LIKE :busqueda OR content LIKE :busqueda'
  );
  $statement->execute(array(':busqueda' => "%$busqueda%"));
  $resultado = $statement->fetchAll();

  if (empty($resultado)) {
    $titulo = 'No se encontraron artículos con la búsqueda: ' . $busqueda;
  } else {
    $titulo = 'Resultados de la búsqueda: ' . $busqueda;
  }
} else {
  header('Location: ' . RUTA . '/index.php');
}

require 'views/buscar.view.php';
