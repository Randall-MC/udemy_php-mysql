<?php

function connection($tabla, $usuario, $pass)
{
  try {
    $connection = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
    return $connection;
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    return false;
  }
}
