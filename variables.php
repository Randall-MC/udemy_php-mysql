<?php
// String: Cadena de texto
$nombre = 'Luis';

// Integer: Números enteros
$numero = 7;

// Double: Números decimales
$numero_decimal = 7.7;

# Boolean: Verdadero o Falso
$verdadero = true;

# Null: Variable sin valor asignado
$variable;

# Las comillas dobles permiten usar variables dentro de la cadena de texto
echo "Hola, $nombre";
# A menos que sepas lo que haces, siempre utiliza comillas sensillas
echo 'Hola ' . $nombre;

# ¿Cómo obtener el tipo de dato de una variable?
echo gettype($numero);
