<?php

include 'conexion.php';
$conexion = new conexion();

if (isset($_FILES["file"]["type"]))
{
  $comment = $_POST["comment"];
  $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
  $targetPath = "img/".$_FILES['file']['name']; // Target path where file is to be stored

  move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

  $query = $conexion->query("INSERT INTO photos (url,comment) VALUES ('$targetPath','$comment');");

  echo "<span id='Imagen OK...!!</span><br/>";
  echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
  echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

  echo $targetPath;
}
?>
