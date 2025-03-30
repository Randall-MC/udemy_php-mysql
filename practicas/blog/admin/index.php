<?php session_start();

require 'config.php';
require '../functions.php';

// Crear la conexión a la base de datos
$connection = connection($bd_config);
// Comprobar si existe una sesión
comprobarSession();
// Comprobar si hay conexión con la base de datos
if (!$connection) {
  header('Location: ../error.php');
}
// Obtener los artículos
$posts = obtener_post($blog_config['post_por_pagina'], $connection);

require '../views/admin_index.view.php';
