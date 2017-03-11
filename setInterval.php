<?php

  function setInterval($func = null, $interval = 0, $times = 0){
    if( ($func == null) || (!function_exists($func)) )
    {
      throw new Exception('We need a valid function.');
    }

    $seconds = $interval * 1000;

    if($times > 0){

      $i = 0;

      while($i < $times)
      {
          call_user_func($func);
          $i++;
          usleep( $seconds );
      }
    }
    
    else
    {

      while(true){
          call_user_func($func);
          usleep( $seconds );
      }
    }
  }

?>
