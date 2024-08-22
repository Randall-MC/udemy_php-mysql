<?php

# Convierte caracteres especiales en símbolos HTML
$texto = '<b>Hola</b>';
htmlspecialchars($texto);
# Elimina los espacios en blanco
$texto = '  Hola  ';
trim($texto);
# Cuenta la cantidad de caracteres en un string
$texto = 'Los espacios cuentan';
strlen($texto);
# Devuelve un nuevo string indicando la posición de inicio y de fin
$texto = 'Este es un string';
substr($texto, 0, 4);
# Convertir a mayúsculas
$texto = 'texto en minúsculas';
strtoupper($texto);
# Convertir a minúsculas
$texto = 'TEXTO EN MAYÚSCULAS';
strtoupper($texto);
# Conocer la posición de una letra
$texto = 'Hola';
strpos($texto, 'l');

# Para más detalles sobre las funciones que existen para los strings visita el siguiente enlace

# https://www.php.net/manual/en/ref.strings.php