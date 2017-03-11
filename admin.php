<?php
include 'conexion.php';

$conexion = new conexion();

if ($_POST)

{
  $user = $_POST["user"];
  $pass = $_POST["pass"];

  $query = $conexion->query("SELECT * FROM users WHERE user = '$user' AND pass='$pass' LIMIT 1");

  if ($row = $conexion->rows($query) > 0)
  {
    $_SESSION["user"] = "admin";

    require 'modals/addImage.php';
    require 'modals/deleteImage.php';
    require 'modals/alterImage.php';
  }

  else
  {
    echo "<h3>Usuario o contraseña incorrectos</h3>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test 8</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
    body
    {
      background-image: url("images/1.jpg");
    }
    </style>
  </head>
  <body>
    <button type="button" class="btn btn-info" onclick="index()" name="button">Inicio</button>
    <?php

      if (isset($_SESSION["user"]))
      {
        echo'
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addImage" name="button">Agregar imagen</button>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#deleteImage" name="button">Borrar imagen</button>
          <button type="submit" class="btn btn-danger" onclick="destroy_Sesion()" name="button">Cerrar Sesion</button>';

      }

      else
      {
        echo'  <form class="" action="admin.php" method="post">
            <h3>Usuario</h3>
            <input type="text" name="user" id="user" placeholder="usuario" value="" required>

            <h3>contraseña</h3>
            <input type="password" name="pass" id="pass" placeholder="contraseña" value="" required><p><br>
            <input type="submit" class="btn btn-default" name="" value="Iniciar sesion">

          </form>';
      }

    ?>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/gallery.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function()
      {
          $("#comment").val(" ");

        document.getElementById('file').value = "";
          add_Img();

      });

      function destroy_Sesion()
       {

         window.location.href = window.location.href;
      }

      function index()
      {
          location.href = "index.php";
      }
    </script>

  </body>
</html>
