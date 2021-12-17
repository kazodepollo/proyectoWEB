<?php
  session_start();

  require 'base.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, pass FROM registro WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciando sesion</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link href="./estilos/principal.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <?php require 'cosas/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['usuario']; ?>
      <br>Se inicio sesion correctamente
      <a href="cerrar.php">
        Vuelva pronto
      </a>
    <?php else: ?>
      <h1>Inicie sesion o registrese</h1>

      <a href="logi.php">Iniciar sesion</a> o
      <a href="regis.php">Registrarse</a>
    <?php endif; ?>
  </body>
</html>