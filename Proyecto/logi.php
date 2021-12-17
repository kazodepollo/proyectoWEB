<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /Proyecto');
  }
  require 'base.php';

  if (!empty($_POST['usuario']) && !empty($_POST['pass'])) {
    $records = $conn->prepare('SELECT id, usuario, pass FROM registro WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['pass'], $results['pass'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: ./web_base/p1/index.html'); //mover en caso de poner ruta
    } else {
      $message = 'Lo sentimos no se inicio sesion';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link href="./estilos/principal.css" type="text/css" rel="stylesheet">
  
</head>
  <body>
    <?php require 'cosas/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Inicia sesion</h1>
    <span>o <a href="regis.php">Registrate aqui:</a></span>

    <form action="logi.php" method="POST">
      <input name="usuario" type="text" placeholder="Ingresa el usuario">
      <input name="pass" type="password" placeholder="Ingresa la contraseña">
      <input type="submit" value="Ingresar">
    </form>
  </body>
</html>