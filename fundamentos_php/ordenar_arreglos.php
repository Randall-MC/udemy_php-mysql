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

$numeros = [
  8,
  6,
  1,
  36,
  100,
  10
];

# Ordenar un arreglo (ascendente)
sort($meses);
# Ordenar un arreglo (descendente)
rsort($numeros);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meses del Año</title>
</head>

<body>
  <h1>Meses del año</h1>
  <ul>
    <?php
    foreach ($meses as $mes) {
      echo '<li>' . $mes . '</li>';
    }
    echo '<br>';
    echo '<hr>';
    foreach ($numeros as $numero) {
      echo '<li>' . $numero . '</li>';
    }

    ?>
  </ul>
</body>

</html>