<?php
/* Operador de nave espacial
  - Regresa 1 si el valor de la izquierda es mayor que el valor de la derecha
  - Regresa 0 si los valores son iguales
  - Regresa -1 si el valor de la derecha es mayor que el valor de la izquierda
*/

# <   =    >
# 1   0   -1

echo 10 <=> 1;
echo '<br>';
echo 10 <=> 10;
echo '<br>';
echo 1 <=> 10;
echo '<br>';

$arreglo = [3, 1, 5, 2, 4];
# Ordenar de forma ascendente el arreglo
# sort($arreglo);
/*
function comparar($a, $b)
{
  if ($a == $b) {
    return 0;
  } else if ($a > $b) {
    return 1;
  } else {
    return -1;
  }
}
*/
function comparar($a, $b)
{
  return $a <=> $b;
}
usort($arreglo, 'comparar');

# implode() devuelve el arreglo separado por lo que se le pase como primer argumento
echo implode(' ', $arreglo);
