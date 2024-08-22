<?php

# Calcular el área de un triangulo
function calcular_area_triangulo($base, $altura)
{
  $area = ($base * $altura) / 2;
  return $area;
}

$triangulo_ejemplo = calcular_area_triangulo(12, 32);
echo 'El área del triangulo de ejemplo es: <strong>' . $triangulo_ejemplo . '</strong> m2';
