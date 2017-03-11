
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="addImage" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Subir Imagen</h4>
        </div>

        <div class="modal-body">

          <form id ="fileToUpload" enctype="multipart/form-data" class="" action="" method="post">

           <div id="imgPreview"><img src="noimage.png" id="preview" alt=""></div>

           <h3>Selecciona una imagen</h3>

           <input type="file" name="file" id="file" value="" required accept="image/*">
           <textarea name="comment" rows="2" cols="60" id="comment" placeholder="comentario de la imagen" style="resize:none"></textarea><br>
           <input type="submit" value="Subir Imagen" name="button" class="submit" value="">
         </form>

         <div id="message"></div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

</div>

  </body>


</html>
