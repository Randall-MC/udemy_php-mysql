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

$alejandro = [
  'telefono' => 1122334455,
  'edad' => 45,
  'pais' => 'Mexico',
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclo Foreach</title>
</head>

<body>
  <h1>Mete</h1>
  <ul>
    <?php
    foreach ($meses as $mes) {
      echo '<li>' . $mes . '</li>';
    }

    # Recorrer un arreglo asociativo
    foreach ($alejandro as $key => $value) {
      echo 'Propiedad: ' . $key . ' Valor: ' . $value . '<br>';
    }
    ?>
  </ul>
</body>

</html>