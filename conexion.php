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
    while ($result = $array->fetch_assoc())
    {
      echo '<a class="image-link" href="'.$result["url"].'"data-lightbox="set" data-title="'.$result["comment"].'">
      <img class="image" with="250" height ="250" src="'.$result["url"].'"/></a>';
    }
  }

  function show_Photos_For_Delete($array)
  {
    while ($result = $array->fetch_assoc())
    {
      echo '<a class="image-link" href="'.$result["url"].'"data-lightbox="set" data-title="'.$result["comment"].'">
      <img class="image" with="100" height ="100" src="'.$result["url"].'"/></a>';
    }
  }
}

?>
