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

// Validar si recibimos los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Limpiamos lo valores que recibimos del formulario
  $titulo = limpiarDatos($_POST['titulo']);
  $extracto = limpiarDatos($_POST['extracto']);
  $texto = $_POST['texto'];
  $id = limpiarDatos($_POST['id']);
  $thumb_guardada = $_POST['thumb-guardada'];
  $thumb = $_FILES['thumb'];
  // Verificamos si el usuario subió una imagen nueva o trabajamos con la que ya teníamos
  if (empty($thumb['name'])) {
    $thumb = $thumb_guardada;
  } else {
    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
    move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
    $thumb = $_FILES['thumb']['name'];
  }

  // Preparamos nuestra sentencia SQL
  $statement = $connection->prepare(
    'UPDATE posts SET title = :titulo, summary = :extracto, content = :texto, thumb = :thumb WHERE id = :id'
  );
  // Ejecutamos la consulta SQL
  $statement->execute(array(
    ':titulo' => $titulo,
    ':extracto' => $extracto,
    ':texto' => $texto,
    ':thumb' => $thumb,
    ':id' => $id,
  ));

  // Redirigimos al usuario al panel del admin
  header('Location: ' . RUTA . '/admin');

  // Traemos los valores al formulario
} else {
  // Establecemos el id del post
  $id_articulo = id_articulo($_GET['id']);
  // Comprobar si existe un post con ese id
  if (empty($id_articulo)) {
    header('Location: ' . RUTA . '/admin');
  }
  // Obtenemos el post
  $post = obtener_post_por_id($connection, $id_articulo);
  // Validamos que haya un post
  if (!$post) {
    header('Location: ' . RUTA . '/admin');
  }

  // Extraemos el arreglo
  $post = $post[0];
}

require '../views/editar.view.php';
