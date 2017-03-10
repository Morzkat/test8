<?php
include 'conexion.php';
$conexion = new conexion();

if ($_POST)
{
  $id = $_POST["id_Image"];
  echo $id;

  $query = $conexion->query("DELETE FROM photos WHERE id = '$id'");

}

?>
