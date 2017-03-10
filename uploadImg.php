<?php

include 'conexion.php';
$conexion = new conexion();

if (isset($_FILES["file"]["type"]))
{
  $comment = $_POST["comment"];
  $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
  $targetPath = "img/".$_FILES['file']['name']; // Target path where file is to be stored

  move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

  $query = $conexion->query("SELECT url FROM photos WHERE url = '$targetPath' ");

  if ($conexion->rows($query) == 0)
  {
    $conexion->query("INSERT INTO photos (url,comment) VALUES ('$targetPath','$comment');");

    echo "<span id='success'>Imagen OK...!!</span>";
    echo "<br/><b>Nombre IMG:</b> " . $_FILES["file"]["name"] . "<br>";
  }

  else
  {
    echo "<br/><b>Existe IMG:</b> " . $_FILES["file"]["name"] . "<br>";
  }

}
?>
