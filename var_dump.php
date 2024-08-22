<?php
$texto = 'José';
$numero = 10;
$numero2 = '10';
$arreglo = ['Jose', 'Alfonso', 'Pedro'];
$arreglo_asociativo = ['nombre' => 'Jose', 'apellido' => "Perez"];
$booleano = false;

# Las etiquetas pre sirven para dar formato a lo que se muestra cuando var dump recibe un arreglo y sea más fácil de leer
echo '<pre>';
var_dump($arreglo_asociativo);
echo '</pre>';
