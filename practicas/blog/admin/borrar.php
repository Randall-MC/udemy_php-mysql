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

// Obtenemos el id desde la URL con el método GET
$id = limpiarDatos($_GET['id']);
// Si no hay id, enviamos al usuario al panel de administración
if (!$id) {
  header('Location: ' . RUTA . '/admin');
}
// Preparamos la consulta SQL para borrar el post
$statement = $connection->prepare('DELETE FROM posts WHERE id = :id');
// Reemplazamos el placeholder
$statement->execute(array(':id' => $id));
// Enviamos al usuario al panel de administración
header('Location: ' . RUTA . '/admin');
