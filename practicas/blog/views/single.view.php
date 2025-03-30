<?php require 'header.php'; ?>

<div class="contenedor">
  <div class="post">
    <article>
      <h2 class="titulo"><?php echo $post['title']; ?></h2>
      <p class="fecha"><?php echo fecha($post['date']); ?></p>
      <div class="thumb">

        <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb']; ?>" alt="<?php echo $post['title']; ?>">

      </div>
      <p class="extracto">
        <?php echo nl2br($post['content']); ?>
      </p>
    </article>
  </div>

</div>

<?php require 'footer.php'; ?>