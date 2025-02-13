<?php

$connection = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($connection->connect_errno) {
  die('Error en la conexión');
} else {
  // código
}
