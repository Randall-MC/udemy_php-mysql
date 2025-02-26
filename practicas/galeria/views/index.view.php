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
      <h1 class="titulo">Mi increíble Galería en PHP y MySQL</h1>
    </div>
  </header>

  <!-- Aquí comienza la galería -->
  <section class="fotos">
    <div class="contenedor">

      <?php foreach ($fotos as $foto): ?>
        <div class="thumb">
          <a href="foto.php?id=<?php echo $foto['id']; ?>">
            <img src="img/<?php echo $foto['image']; ?>" alt="<?php echo $foto['title']; ?>">
          </a>
        </div>
      <?php endforeach; ?>

      <!-- Paginación -->
      <div class="paginacion">
        <?php if ($pagina_actual > 1): ?>
          <a href="index.php?p=<?php echo $pagina_actual - 1 ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
        <?php endif; ?>

        <?php if ($total_paginas != $pagina_actual): ?>
          <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha">Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
        <?php endif; ?>

      </div>
    </div>
  </section>
  <!-- Aquí termina la galería -->

  <!-- Pie de página -->
  <footer>
    <p class="copyright">Galería creada por Carlos Arturo - FalconMasters</p>
  </footer>

  <!-- Íconos -->
  <script src="https://kit.fontawesome.com/2c66b09c28.js" crossorigin="anonymous"></script>
</body>

</html>