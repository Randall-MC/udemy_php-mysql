<?php
# Modo estricto
declare(strict_types=1);
# Esto indica que la función debe devolver un valor de tipo integer
function obtenerEdad(): int
{
  $edad = 23;
  return $edad;
}

echo obtenerEdad();
