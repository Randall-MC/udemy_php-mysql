<?php require 'header.php'; ?>
<div class="contenedor">
  <div class="post">
    <article>
      <h2 class="titulo">Editar Artículo</h2>
      <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <!-- Este input de tipo hidden, sirve para poder decir cuál es el ID del post con el que estamos trabajando -->
        <input type="hidden" value="<?php echo $post['id'] ?>" name="id">
        <!-- --- -->
        <input type="text" name="titulo" value="<?php echo $post['title'] ?>">
        <input type="text" name="extracto" value="<?php echo $post['summary'] ?>">
        <textarea name="texto" id=""><?php echo $post['content'] ?></textarea>
        <input type="file" name="thumb" id="">
        <!-- Este input de tipo de hidden se encarga de guardar el valor de la thumb que ya se tiene en la base de datos -->
        <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb'] ?>">
        <!-- Esto por si no se actualiza la imagen del post -->

        <input type="submit" value="Modificar Artículo">
      </form>
    </article>
  </div>
</div>
<?php require 'footer.php'; ?>