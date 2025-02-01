<?php

session_start();

$_SESSION['nombre'] = 'Carlos';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sessions</title>
</head>

<body>
  <h1>Página de Inicio</h1>
  <p></p>
  <a href="pagina2.php">Ir a la página 2</a>
</body>

</html>