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
      <h1 class="titulo">Foto: <?php echo $foto['title']; ?></h1>
    </div>
  </header>

  <div class="contenedor">
    <!-- Imagen -->
    <div class="foto">
      <img src="img/<?php echo $foto['image'] ?>" alt="<?php echo $foto['title']; ?>">
      <p class="texto"><?php echo $foto['description'] ?></p>
      <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
    </div>
  </div>

  <!-- Pie de página -->
  <footer>
    <p class="copyright">Galería creada por Carlos Arturo - FalconMasters</p>
  </footer>

  <!-- Íconos -->
  <script src="https://kit.fontawesome.com/2c66b09c28.js" crossorigin="anonymous"></script>
</body>

</html>