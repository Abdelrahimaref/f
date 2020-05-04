<?php 
	  $dbhost = "localhost";
      $dbName = "alerts";
      $dbuserName = "root";
      $dbPassword = "forex";
      $connection = mysqli_connect($dbhost,$dbuserName,$dbPassword,$dbName);

    if(mysqli_connect_errno()){
                die("there is an error in database".mysqli_connect_error());    
    }
 ?>