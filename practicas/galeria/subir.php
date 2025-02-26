<?php
require 'funciones.php';

$connection = connection('galeria', 'root', '');

if (!$connection) {
  header('Location: error.php');
  // die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
  $check = @getimagesize($_FILES['foto']['tmp_name']);
  if ($check !== false) {
    $destinyFolder = 'img/';
    $uploadedFile = $destinyFolder . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $uploadedFile);

    $statement = $connection->prepare(
      'INSERT INTO images (title, description, image)
       VALUES (:title, :description, :image)'
    );

    $statement->execute(array(
      ':title' => $_POST['titulo'],
      ':description' => $_POST['texto'],
      ':image' => $_FILES['foto']['name']
    ));

    header('Location: index.php');
  } else {
    $error = 'El archivo no es una imagen o el archivo es muy pesado';
  }
}

require 'views/subir.view.php';
