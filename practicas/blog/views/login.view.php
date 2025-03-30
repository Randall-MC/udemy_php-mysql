<?php require 'views/header.php'; ?>

<div class="contenedor">
  <div class="post">
    <article>
      <h2 class="titulo">Iniciar Sesión</h2>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario">
        <input type="text" name="usuario" id="" placeholder="Usuario">
        <input type="password" name="password" id="" placeholder="Contraseña">
        <input type="submit" value="Iniciar Sesión">
      </form>
    </article>
  </div>
</div>

<?php require 'views/footer.php'; ?>