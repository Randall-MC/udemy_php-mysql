<?php
require 'funciones.php';

$connection = connection('galeria', 'root', '');
if (!$connection) {
  header('Location: error.php');
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;
if (!$id) {
  header(header: 'Location: index.php');
}

$statement = $connection->prepare('SELECT * FROM images WHERE id = :id');
// $statement->execute(array(':id' => $id));
$statement->execute([':id' => $id]);
$foto = $statement->fetch();

if (!$foto) {
  header('Location: index.php');
}

require 'views/foto.view.php';
