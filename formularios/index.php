<?php

if ($_POST) {
  echo $_POST['nombre'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularios</title>

  <style>
    body {
      width: 500px;
      height: 700px;
      border: 1px solid black;
      margin: 20px auto;
    }

    form {
      padding: 10px;
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>

  <!-- <form action="index.php" method="post"> -->
  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" placeholder="Nombre" name="nombre">
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" value="hombre" id="hombre">
    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" value="mujer" id="mujer">

    <select name="year" id="year">
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
    </select>

    <label for="terminos">Aceptas los términos?</label>
    <input type="checkbox" name="terminos" id="terminos" value="ok">

    <input type="submit" value="Enviar">

  </form>

</body>

</html>