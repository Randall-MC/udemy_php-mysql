  <?php require 'header.php'; ?>

  <div class="contenedor">
    <?php foreach ($posts as $post): ?>
      <div class="post">
        <article>
          <h2 class="titulo"><a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></h2>
          <p class="fecha"><?php echo fecha($post['date']); ?></p>
          <div class="thumb">
            <a href="single.php?id=<?php echo $post['id'] ?>">
              <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb'] ?>" alt="Imagen del post">
            </a>
          </div>
          <p class="extracto"><?php echo $post['summary'] ?></p>
          <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar leyendo ...</a>
        </article>
      </div>
    <?php endforeach; ?>

    <?php require 'pagination.php'; ?>
  </div>

  <?php require 'footer.php'; ?>