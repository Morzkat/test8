<?php

/**
 *
 */
class conexion extends mysqli
{

  function __construct()
  {
    parent::__construct('localhost','root','123','tarea7');
    $this->connect_errno ? die("Error BD") : null;

  }

  function rows($query)
  {
    return mysqli_num_rows($query);
  }

  function show_Photos($array)
  {
    $i = 0;
    while ($i < 20)
    {
      $result = $array->fetch_assoc();
      if (!file_exists($result["url"]))
      {
        $foto = "http://placehold.it/750x450";
      }
      else
      {
        $foto = $result["url"];
      }

      echo '<div class="col-md-3 portfolio-item">
      <a class="image-link" href="'.$result["url"].'"data-lightbox="set" data-title="'.$result["comment"].'">
      <img class="image" width="300px" height="200px" src="'.$foto.'"/></a>
      </div>';

      $i++;
    }
  }

  function show_Photos_For_Delete($array)
  {
    while ($result = $array->fetch_assoc())
    {

      echo '<div class="col-md-3 portfolio-item">';
      echo '<span class="btn btn-danger" onclick="deleteImage('.$result["id"].') id="close_X">x</span>
      <a class="image-link" href="'.$result["url"].'"data-lightbox="set" data-title="'.$result["comment"].'">
      <img class="image" width="100px" height="100px" src="'.$result["url"].'"/></a></div>';

    }
  }

  function show_Photos_For_Modify($array)
  {
    while ($result = $array->fetch_assoc())
    {

      echo '<div class="col-md-3 portfolio-item">';
      echo '<span class="btn btn-danger" onclick="deleteImage('.$result["id"].') id="close_X">Modificar</span>
      <a class="image-link" href="'.$result["url"].'"data-lightbox="set" data-title="'.$result["comment"].'">
      <img class="image" width="100px" height="100px" src="'.$result["url"].'"/></a></div>';

    }
  }
}

?>
