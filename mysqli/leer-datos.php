<?php

$connection = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($connection->connect_errno) {
  die('Error en la conexión');
} else {
  // $id = isset($_GET['id']) ? $_GET['id'] : 4;
  // $sql = "SELECT * FROM usuarios WHERE id = $id";
  $sql = "SELECT * FROM usuarios";
  $result = $connection->query($sql);

  if ($result->num_rows) {
    // echo '<pre>';
    // var_dump($result->fetch_assoc());
    // var_dump($result->fetch_assoc());
    // echo $result->fetch_assoc()['nombre'];
    // echo '</pre>';

    while ($user = $result->fetch_assoc()) {
      echo $user['id'] . ' - ' . $user['nombre'] . ' - ' . $user['email'] . '<br>';
    }
  }
}
