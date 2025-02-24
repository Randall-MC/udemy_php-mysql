<?php session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = htmlspecialchars(strip_tags(strtolower($_POST['usuario'])), ENT_QUOTES, 'UTF-8');
  $password = $_POST['password'];
  $password = hash('sha512', $password);

  try {
    $connection = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  $statement = $connection->prepare('SELECT * FROM usuarios WHERE user = :usuario AND password = :password LIMIT 1');
  $statement->execute(array(':usuario' => $usuario, ':password' => $password));
  $result = $statement->fetch();

  if ($result !== false) {
    $_SESSION['usuario'] = $usuario;
    header('Location: index.php');
  } else {
    $errores = '<li>Usuario o contraseña incorrectos</li>';
  }
}

require 'views/login.view.php';
