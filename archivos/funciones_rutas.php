<?php
// Obtener el nombre del archivo y su extensión
echo pathinfo('documento.txt', PATHINFO_BASENAME);
// Obtener el directorio del archivo
echo pathinfo('documento.txt', PATHINFO_DIRNAME);
// Obtener la extensión del archivo
echo pathinfo('documento.txt', PATHINFO_EXTENSION);
// Obtener el nombre del archivo sin la extensión
echo pathinfo('documento.txt', PATHINFO_FILENAME);

echo '<br>';

// Obtener todos los archivos de un directorio con una extensión específica
$archivos_php = glob('*.php');
print_r($archivos_php);

echo '<br>';

// Obtener todos los archivos de diferentes extensiones
$archivos = glob('../POO/*.{php,txt}', GLOB_BRACE);
print_r($archivos);

echo '<br>';

// Obtener el nombre y la extensión de un archivo sin el directorio
echo basename('carpeta1/carpeta2/archivo.php', '.php');

echo '<br>';

// Obtener el directorio de un archivo sin el nombre y la extensión
echo dirname('carpeta1/carpeta2/archivo.php');
