<?php

require 'modals/addImage.php';
require 'modals/deleteImage.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addImage" name="button">Agregar imagen</button>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#deleteImage" name="button">Borrar imagen</button>
    <button type="button" name="button">Modificar info imagen</button>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/gallery.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          add_Img();
      });
    </script>
  </body>
</html>
