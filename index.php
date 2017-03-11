<?php
include 'conexion.php';
$conexion = new conexion();

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
    <link rel="stylesheet" href="css/lightbox.css">
    <link href="css/4-col-portfolio.css" rel="stylesheet">

    <style media="screen">
    #close_X
    {
      float:right;
      display:inline;
      background:#ccc;
    }

    .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    }

    .pagination a.active {
    background-color: #4CAF50;
    color: white;
    }

    .pagination a:hover:not(.active) {background-color: #ddd;}
    body
    {
      background-image: url("images/0.jpg");
      background-size: 100%, 100%;
    }
    </style>
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <button type="button" onclick="admin()" class="btn btn-primary" name="button">Admin</button>
    <div>
      <?php
        $query = $conexion->query("SELECT * FROM photos LIMIT 20");

          if ($conexion->rows($query) > 0)
          {
              $conexion->show_Photos($query);
          }
      ?>
    </div><br>

    <div class="pagination">
      <a href="#">&laquo;</a>
      <a class="active" href="#">1</a>
      <a  href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>

      <a href="#">&raquo;</a>
    </div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/lightbox.js" charset="utf-8"></script>
    <script type="text/javascript">
      function admin()
      {
        location.href = "admin.php";
      }
    </script>
  </body>
</html>
