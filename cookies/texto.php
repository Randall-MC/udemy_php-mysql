<?php

if (isset($_COOKIE['font-size'])) {
  $tamaño = htmlspecialchars($_COOKIE['font-size']);
} else {
  $tamaño = '20px';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Texto</title>

  <style>
    p {
      font-size: <?php echo $tamaño; ?>;
    }
  </style>

</head>

<body>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, sequi! Ut, numquam, dicta suscipit odio non optio est voluptas animi aspernatur ducimus quaerat, vel ipsa ab delectus autem earum officia!</p>
</body>

</html>