<?php

// Verificar si un archivo existe
// $resultado = file_exists('documento.txt');
// if ($resultado) {
//   echo 'El archivo existe';
// } else {
//   echo 'El archivo no existe';
// }

// Escribir en un archivo
// file_put_contents('documento.txt', "\n¡Texto agregado con PHP!", FILE_APPEND);

// file_put_contents('documento.txt', '');
// for ($i = 1; $i <= 10; $i++) {
//   file_put_contents('documento.txt', "\n$i", FILE_APPEND);
// }

// Leer un archivo
echo file_get_contents('documento.txt');

// Convertir un archivo en un array
$archivo = file('documento.txt');
echo '<pre>';
print_r($archivo);
echo '</pre>';

echo '<hr>';
echo $archivo[5];
