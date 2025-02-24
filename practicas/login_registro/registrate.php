<?php session_start();
// Verificar si el usuarios ya esta logeado
if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
}
// Verificar si el usuario envio el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
  // Validar los datos
  $usuario = htmlspecialchars(strip_tags(strtolower($_POST['usuario'])), ENT_QUOTES, 'UTF-8');
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  $errores = '';
  // Verificar si los campos estan vacios
  if (empty($usuario) or empty($password) or empty($password2)) {
    $errores .= '<li>Por favor rellena todos los datos correctamente</li>';
  } else {
    try {
      $connection = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

    // Verificar que el usuario solo contenga caracteres alfanuméricos
    if (!preg_match('/^[a-z0-9]+$/', $usuario)) {
      $errores .= '<li>El usuario solo puede contener letras y números</li>';
    }

    // Verificar si el usuario ya existe
    $statement = $connection->prepare('SELECT * FROM usuarios WHERE user = :usuario LIMIT 1');
    $statement->execute(array(':usuario' => $usuario));
    $resultado = $statement->fetch();

    if ($resultado != false) {
      $errores .= '<li>el nombre de usuario ya existe</li>';
    }

    // Hashear la contraseña
    $password = hash('sha512', $password);
    $password2 = hash('sha512', $password2);

    // echo "$usuario . $password . $password2";
    if ($password != $password2) {
      $errores .= '<li>Las contraseñas no son iguales</li>';
    }
  }

  // Si no hay errores, entonces se inserta el usuario en la base de datos
  if ($errores == '') {
    $statement = $connection->prepare('INSERT INTO usuarios (id, user, password) VALUES (null, :user, :password)');
    $statement->execute(array(':user' => $usuario, ':password' => $password));

    header('Location: login.php');
  }
}

require 'views/registrate.view.php';
