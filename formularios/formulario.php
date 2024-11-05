<?php

$errores = '';

if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];

  if (!empty($nombre)) {
    /* $nombre = trim($nombre); // quita espacios en blanco
    $nombre = htmlspecialchars($nombre); // convierte caracteres especiales en entidades HTML
    $nombre = stripcslashes($nombre); // elimina las barras invertidas */

    # Deprecated
    // $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

    $nombre = htmlspecialchars(strip_tags($nombre), ENT_QUOTES, 'UTF-8');
    echo "Tu nombre es: $nombre <br>";
  } else {
    $errores .= 'Por favor agrega un nombre <br>';
  }

  if (!empty($correo)) {
    echo "Tu correo es: $correo";
  } else {
    $errores .= 'Por favor agrega un correo <br>';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Formulario</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>

  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="email" name="correo" placeholder="correo">

    <?php if (!empty($errores)): ?>
      <div class="error"><?php echo $errores; ?></div>
    <?php endif; ?>

    <input type="submit" name="submit">
  </form>

</body>

</html>