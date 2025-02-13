<?php

$connection = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($connection->connect_errno) {
  die('Error en la conexión con el servidor');
} else {
  $sql = "INSERT INTO usuarios (id, nombre, email) VALUES (NULL, 'Fernando Alberto', 'fernandito@email.con')";
  $connection->query($sql);
  if ($connection->affected_rows >= 1) {
    echo 'Affected rows: ' . $connection->affected_rows;
  }
}
