<?php

  require 'base.php';

  $message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['pass'])) {
    $sql = "INSERT INTO registro (usuario, pass) VALUES (:usuario, :pass)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    $stmt->bindParam(':pass', $pass);
    $confirm_password=

    echo
    if (password_verify($password, $password_hash)) {
      login_success();
  } else {
      login_failure();
  }

    if ($stmt->execute()) {
        
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/principal.css">
  </head>
  <body>

    <?php require 'cosas/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registro</h1>
    <span>or <a href="logi.php">Inicio de sesion:</a></span>

    <form action="regis.php" method="POST">
      <input name="usuario" type="text" placeholder="Introduce tu nombre">
      <input name="pass" type="password" placeholder="Introduce tu contraseña">
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
      <input type="submit" value="Registrarse ">
    </form>

  </body>
</html>
