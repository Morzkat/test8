<?php



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

    <form id ="fileToUpload" enctype="multipart/form-data" class="" action="" method="post">

      <div id="imgPreview"><img src="noimage.png" id="preview" alt=""></div>

      <h3>IMG</h3>

      <input type="file" name="file" id="file" value="" required accept="image/*">
      <textarea name="name" id="comment" rows="2" cols="60" placeholder="comentario de la imagen" style="resize:none"></textarea><br>
      <input type="submit" value="Subir Imagen" name="button" class="submit" value="">
    </form>

    <h4 id="loading">loading</h4>
    <div id="message"></div>

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
