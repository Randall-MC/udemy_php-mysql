<?php
error_reporting(0);
// Tipo de documento
header('Content-type: application/json; charset=utf-8');

// Recibimos los datos a través del método POST
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];

// Validamos los datos de lado del servidor
function validarDatos($nombre, $edad, $pais, $correo)
{
  if ($nombre = '') {
    return false;
  } elseif ($edad = '' || is_int($edad)) {
    return false;
  } elseif ($pais = '') {
    return false;
  } elseif ($correo = '') {
    return false;
  }

  return true;
}

if (validarDatos($nombre, $edad, $pais, $correo)) {
  $conexion = new mysqli('localhost', 'root', '', 'php_ajax');
  $conexion->set_charset("utf8mb4");

  if ($conexion->connect_errno) {
    $respuesta = ['error' => true];
  } else {
    $statement = $conexion->prepare("INSERT INTO usuarios (nombre, edad, pais, correo) VALUES (?, ?, ?, ?)");
    $statement->bind_param("siss", $nombre, $edad, $pais, $correo);
    $statement->execute();

    if ($conexion->affected_rows <= 0) {
      $respuesta = ['error' => true];
    }
  }

  $respuesta = [];
} else {
  $respuseta = ['error' => true];
}

echo json_encode($respuseta);
