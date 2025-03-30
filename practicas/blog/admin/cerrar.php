<?php session_start();
// Destruir la sesión
session_destroy();
// Asignar un arreglo vacío para al arreglo $_SESSION
$_SESSION = array();
// Redirigir al usuario a index.php
header('Location: ../');
// Matamos la ejecución de la página
die();
