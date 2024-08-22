<?php

$meses = [
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre'
];

echo count($meses);
echo '<br>';
# Restamos uno a la cantidad total de elementos para acceder a la última posición del arreglo
$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];
