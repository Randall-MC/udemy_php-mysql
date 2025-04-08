<?php
error_reporting(0);

header('Content-type: application/json; charset=utf-8');
// Creamos la conexión a la base de datos con mysqli
$conexion = new mysqli('localhost', 'root', '', 'php_ajax');

if ($conexion->connect_errno) {
  $respuesta = [
    'error' => true
  ];

  echo json_encode($respuesta); // Convertimos a JSON y enviamos la respuesta.
  exit; // Salimos para evitar ejecutar el resto del script.

} else {
  // Establece el set de caracteres
  $conexion->set_charset("utf8mb4");
  $statement = $conexion->prepare("SELECT * FROM usuarios");
  $statement->execute();
  $resultados = $statement->get_result();

  $respuesta = [];

  while ($fila = $resultados->fetch_assoc()) {
    $usuario = [
      'id' => $fila['id'],
      'nombre' => $fila['nombre'],
      'edad' => $fila['edad'],
      'pais' => $fila['pais'],
      'correo' => $fila['correo']
    ];
    array_push($respuesta, $usuario);
  }
}

echo json_encode($respuesta);
