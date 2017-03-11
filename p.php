<?php
include 'conexion.php';
$conexion = new conexion();

  $query = $conexion->query("SELECT * FROM photos");

    if ($conexion->rows($query) > 0)
    {
        $conexion->show_Photos_For_Delete($query);
    }
?>
