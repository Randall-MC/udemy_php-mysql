<?php
$meses = [
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre'
];

echo '<h1>Recorriendo Arreglos</h1>';
echo '<h2>Utilizando Ciclo For</h2>';
for ($i = 0; $i < count($meses); $i++) {
  echo $meses[$i] . '<br>';
}
echo '<hr>';
echo '<h2>Utilizando Ciclo For</h2>';
$contador = 0;
while ($contador < count($meses)) {
  echo $meses[$contador] . '<br>';
  $contador++;
}
