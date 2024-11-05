<?php
# Extraer los elementos de un arreglo asociativo como si fuesen variables
$amigo = ['nombre' => 'Pedro', 'apellido' => 'Perez', 'edad' => 45, 'celular' => 1122334455];
extract($amigo);
# Ahora las propiedades pueden ser usadas como variables
echo $nombre, $apellido .  '<br>';


# Obtener el último elemento de un arreglo y eliminarlo del mismo
$semana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
$ultimo_dia = array_pop($semana);

# Une todos los elementos del arreglo
join(' - ', $semana);

# Regresa el total de elementos dentro del arreglo
count($semana);

# Ordena el arreglo (ascendente)
sort($semana);
# Ordena el arreglo (descendente)
rsort($semana);

# Invierte el orden del arreglo
array_reverse($semana);

# Para más funciones de los arreglos visita el siguiente enlace
# https://www.php.net/manual/es/ref.array.php