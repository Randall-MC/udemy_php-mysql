<?php
$numero = 7;
# Para poder usar una variable global dentro de una función, se debe pasar como parámetro
function mostrarNumero($numero)
{
  echo $numero;
}

mostrarNumero($numero);

function mostrarTexto()
{
  $texto = 'Variable local';
  # Para poder usar la variable fuera de la función usa return
  return $texto;
}

echo mostrarTexto();
