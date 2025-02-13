<?php

$connection = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($connection->connect_errno) {
  die('Error en la conexión con el servidor');
} else {

  $statement = $connection->prepare("INSERT INTO usuarios (id, nombre, email) VALUES (?, ?, ?)");

  // Reemplazamos los placeholder ? con los valores que queremos insertar
  // Una letra por cada placeholder
  // s = string
  // i = integer
  // d = double

  $statement->bind_param("sss", $id, $nombre, $email);

  $id = NULL;

  if (isset($_GET['nombre']) && isset($_GET['email'])) {
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
  } else {
    $nombre = 'Nombre de prueba';
    $email = 'correo@deprueba.com';
  }

  $statement->execute();
  // echo 'Affected rows: ' . $statement->affected_rows;
  if ($connection->affected_rows >= 1) {
    echo 'Affected rows: ' . $connection->affected_rows;
  } else {
    echo 'No rows were affected';
  }
}
