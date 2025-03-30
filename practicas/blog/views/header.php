<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2c66b09c28.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo RUTA; ?>/css/style.css">
  <title>Blog</title>
</head>

<body>
  <header>
    <div class="contenedor">
      <div class="logo izquierda">
        <p><a href="<?php echo RUTA; ?>">Mi primer blog</a></p>
      </div>

      <div class="derecha">
        <form action="<?php echo RUTA; ?>/buscar.php" method="get" class="buscar" name="busqueda">
          <input type="text" name="busqueda" id="" placeholder="Buscar">
          <button type="submit" class="icono fa fa-search"></button>
        </form>

        <nav class="menu">
          <ul>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#">Contacto <i class="icono fa fa-envelope"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>