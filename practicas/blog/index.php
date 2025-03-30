<?php
require 'admin/config.php';
require 'functions.php';

$connection = connection($bd_config);
if (!$connection) {
  header('Location: error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $connection);

// echo '<pre>';
// print_r($posts);
// echo '</pre>';

if (!$posts) {
  header('Location: error.php');
}


require 'views/index.view.php';
