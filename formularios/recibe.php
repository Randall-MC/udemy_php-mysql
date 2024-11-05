<?php

# Obteniendo datos mediante el método POST

// Mostrar en pantalla los datos de la variable $_POST
// print_r($_POST);

// if ($_POST) {
//   $nombre = $_POST['nombre'];
//   $sexo = $_POST['sexo'];
//   $year = $_POST['year'];
//   $terminos = $_POST['terminos'];

//   echo 'Hola ' . $nombre . ' eres ' . $sexo . ' naciste ' . $year .  ' terminos ' . $terminos;
// } else {
//   header('Location: index.php');
// }

# Obteniendo datos mediante el método GET

// print_r($_GET);

if (!$_GET) {
  header('Location: index.php');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if (!$nombre) {
  echo 'El usuario no estableció nombre';
}

echo $nombre . '<br>';
echo $sexo . '<br>';
echo $year . '<br>';
echo $terminos . '<br>';
