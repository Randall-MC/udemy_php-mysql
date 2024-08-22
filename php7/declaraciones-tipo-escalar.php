<?php
# Esta sentencia hace que la función espere estrictamente un argumento de tipo "int"
declare(strict_types=1);
# El "int" hace referencia a que se espera un argumento de tipo entero
function cuadrado(int $numero)
{
  return $numero * $numero;
}

$numero = 5;
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);
