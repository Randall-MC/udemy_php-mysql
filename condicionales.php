<?php

/* - Operadores de comparación
== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación
*/

/* - Operadores lógicos
&& Evalúa que se cumplan las dos condiciones
||, OR Evalúa que se cumpla al menos una condición
XOR Evalúa que se cumpla solo una de las condiciones
*/

$edad = 18;
$nombre = 'Carlos';

if ($edad >= 18 && $nombre == 'Carlos') {
  echo '<h1>Bienvenido ' . $nombre . '</h1>';
}

if ($edad < 18 || $nombre == 'Carlos') {
  echo '<h1>Eres menor de edad</h1>';
}
