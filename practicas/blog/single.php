<?php
require 'admin/config.php';
require 'functions.php';

$connection = connection($bd_config);
$id_articulo = id_articulo($_GET['id']);
if (!$connection) {
  header('Location: error.php');
}

if (empty($id_articulo)) {
  header('Location: ' . RUTA);
}

$post = obtener_post_por_id($connection, $id_articulo);
if (!$post) {
  header('Location: ' . RUTA);
}

$post = $post[0];

require 'views/single.view.php';
