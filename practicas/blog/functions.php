<?php
function connection($bd_config)
{
  try {
    $connection = new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
    return $connection;
  } catch (PDOException $e) {
    // echo "Error " . $e->getMessage();
    return false;
  }
}

function limpiarDatos($datos)
{
  $datos = trim($datos);
  $datos = stripslashes($datos);
  $datos = htmlspecialchars($datos);
  return $datos;
}

function pagina_actual()
{
  return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}


function obtener_post($post_por_pagina, $connection)
{
  $inicio = (pagina_actual() > 1 ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0);
  $statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM posts LIMIT $inicio, $post_por_pagina");
  $statement->execute();
  return $statement->fetchAll();
}

function numero_paginas($post_por_pagina, $connection)
{
  $total_post = $connection->prepare('SELECT FOUND_ROWS() AS total');
  $total_post->execute();
  $total_post = $total_post->fetch()['total'];

  $numero_paginas = ceil($total_post / $post_por_pagina);
  return $numero_paginas;
}

function id_articulo($id)
{
  return (int)limpiarDatos($id);
}

function obtener_post_por_id($connection, $id)
{
  $resultado = $connection->query("SELECT * FROM posts WHERE id = $id LIMIT 1");
  $resultado = $resultado->fetchAll();
  return ($resultado) ? $resultado : false;
}

function fecha($fecha)
{
  $timestamp = strtotime($fecha);
  $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
  $dia = date('d', $timestamp);
  $mes = date('m', $timestamp) - 1;
  $year = date('Y', $timestamp);
  $fecha = "$dia de " . $meses[$mes] . " del $year";
  return $fecha;
}
// Comprobar que existe una sesión en la página
function comprobarSession()
{
  if (!isset($_SESSION['admin'])) {
    header('Location: ' . RUTA);
  }
}
