<?php
// Arreglo asociativo
$arreglo = ['nombre' => 'Carlos', 'apellido' => 'Esperanza'];
// Importa los valores dentro del arreglo como variables
extract($arreglo);
// Ahora puedo usar el key 'nombre' como variable
echo $nombre;
