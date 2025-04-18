<?php session_start();

require 'config.php';
require '../functions.php';

// Comprobar si existe una sesión
comprobarSession();
// Conexión a la base de datos
$connection = connection($bd_config);
if (!$connection) {
  header('Location: ../error.php');
}

// Validar que se hayan enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $titulo = limpiarDatos($_POST['titulo']);
  $extracto = limpiarDatos($_POST['extracto']);
  $texto = $_POST['texto'];
  $thumb = $_FILES['thumb']['tmp_name'];
  // Ruta donde se guardara la imagen
  $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

  move_uploaded_file($thumb, $archivo_subido);

  $statement = $connection->prepare(
    'INSERT INTO posts (id, title, summary, content, thumb) VALUES (null, :titulo, :extracto, :texto, :thumb)'
  );

  $statement->execute(array(
    ':titulo' => $titulo,
    ':extracto' => $extracto,
    ':texto' => $texto,
    ':thumb' => $_FILES['thumb']['name']
  ));

  header('Location: ' . RUTA . '/admin');
}

require '../views/nuevo.view.php';
