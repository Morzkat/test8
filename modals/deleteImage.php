<?php

?>

<?php
include 'conexion.php';
$conexion = new conexion();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="deleteImage" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>

        <div class="modal-body">

          <?php
            $query = $conexion->query("SELECT * FROM photos");

              if ($conexion->rows($query) > 0)
              {
                  $conexion->show_Photos_For_Delete($query);
              }
          ?>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>

  </body>


</html>