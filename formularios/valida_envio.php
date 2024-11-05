<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   echo "Se enviaron por POST";
// } else {
//   echo "Se enviaron por GET";
// }

if (isset($_POST['submit'])) {
  echo "Se han enviado los datos correctamente <br>";
  print_r($_POST['submit']);
}
