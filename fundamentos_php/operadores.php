<?php
/* --- Operadores Aritméticos
+   Suma
-   Resta
*   Multiplicación
/   División
---------- */
$numero = 1;
$resultado = $numero + 9;

/* --- Operadores de Asignación
=
+=
-=
*=
/=
---------- */
# $numero = $numero + 9
$numero += 9;

/* --- Operadores de Comparación
==
===
!=, <>
!===
>
<
>=
<=
---------- */
$numero = 2;
if ($numero === '2') {
  echo 'No son idénticos';
}

/* --- Operadores Lógicos
&&, and
||, or
xor
!
---------- */
$numero = 10;
if ($numero >= 10 && $numero < 20) {
  echo 'El número es mayor o igual a 10 pero menor que 20';
}

/* --- Operadores de Incremento / Decremento
++$x
$x++
--$x
$x--
---------- */
$numero = 1;
$numero++; # Ahora es 2

/* --- Operadores de Cadenas
.
.=
---------- */
$texto = 'Cadena de texto';
$texto .= ' Otra cadena de texto';
