<?php
// Define the path to the root of the project
define('RUTA', 'http://localhost/udemy_php-mysql/practicas/blog');

$bd_config = [
  'basedatos' => 'blog',
  'usuario' => 'root',
  'pass' => '',
];

$blog_config = [
  'post_por_pagina' => 2,
  'carpeta_imagenes' => 'img/',

];

$blog_admin = [
  'usuario' => 'admin',
  'password' => 'admin'
];
