<?php
$paises = ['México', 'España', 'Colombia', 'Peru', 'Argentina', 'Venezuela', 'Guatemala'];

foreach ($paises as $pais) {
  if ($pais == 'Colombia') {
    # Break detiene la ejecución del código
    break;
  }
  echo $pais . '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Países</title>
</head>

<body>
  <h1>Países Latinoamericanos</h1>
  <ul>
    <?php
    foreach ($paises as $pais) {
      if ($pais == 'España') {
        # Continue avanza a la siguiente iteración del arreglo omitiendo el código posterior a el
        continue;
      }
      echo $pais . '<br>';
    }
    ?>
  </ul>
</body>

</html>