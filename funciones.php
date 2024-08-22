<?php
function saludo($nombre)
{
  return "Hola $nombre, bienvenido";
}

$mensaje = saludo('Pedro');

function sumar($numero1, $numero2)
{
  return $numero1 + $numero2;
}

sumar(10, 15);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones</title>
</head>

<body>
  <h1>Return en las funciones</h1>
  <h2>Función saludo()</h2>
  <p><?php echo $mensaje; ?></p>
</body>

</html>