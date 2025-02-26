<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Galería</title>
</head>

<body>
  <!-- Título de la página -->
  <header>
    <div class="contenedor">
      <h1 class="titulo">Subir Foto</h1>
    </div>
  </header>

  <div class="contenedor">
    <!-- Formulario para subir fotos -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="formulario">
      <!-- Seleccionar el archivo -->
      <label for="foto">Selecciona tu foto</label>
      <input type="file" name="foto" id="foto">
      <!-- Título de la imagen -->
      <label for="titulo">Título de la foto</label>
      <input type="text" name="titulo" id="titulo">
      <!-- Descripción de la imagen -->
      <label for="texto">Descripción:</label>
      <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

      <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
      <?php endif; ?>

      <input type="submit" value="Subir Foto" class="submit">
    </form>
  </div>

  <!-- Pie de página -->
  <footer>
    <p class="copyright">Galería creada por Carlos Arturo - FalconMasters</p>
  </footer>

  <!-- Íconos -->
  <script src="https://kit.fontawesome.com/2c66b09c28.js" crossorigin="anonymous"></script>
</body>

</html>