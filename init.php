<?php

  DEFINE ('DB_USER','pg4devt');
  DEFINE ('DB_PASSWORD','pa$$w0rd');
  DEFINE ('DB_HOST','localhost');
  DEFINE ('DB_NAME','zenbooks');

  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  /*
    if(!$dbc){
      die("Could not connect to database" . mysqli_connect_error());    
    } else {
      echo "Database connection successful.";
    }
  */

?>

