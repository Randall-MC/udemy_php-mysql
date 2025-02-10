<?php
$id = $_GET['id'];

try {
  $connection = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
  // echo 'Conexión exitosa';

  // Método query
  // $insert = $connection->query('INSERT INTO usuarios(nombre, email) VALUES("Test", "mysql@test.com")');
  // $vista = $connection->query("SELECT *  FROM usuarios WHERE id = $id");

  // foreach ($statement as $fila) {
  //   echo $fila['id'] . ' - ' . $fila['nombre'] . '<br>';
  // }

  // Prepared Statements
  // $statement = $connection->prepare('SELECT * FROM usuarios WHERE id = :id OR nombre = :nombre');
  // $statement->execute(array(
  //   ':id' => $id,
  //   ':nombre' => 'Alejandro'
  // ));

  // Insert a new user
  $insert = $connection->prepare('INSERT INTO usuarios(nombre, email) VALUES("Prepare Statement", "test2@email.com")');
  $insert->execute();

  // Show all data in the usuarios table
  $statement = $connection->prepare('SELECT * FROM usuarios');
  $statement->execute();

  $result = $statement->fetchAll();
  echo '<pre>';
  print_r($result);
  echo '</pre>';
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
