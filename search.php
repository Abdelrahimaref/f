<?php 
	$dbhost = "localhost";
	$dbName = "alerts";
	$dbuserName = "root";
	$dbPassword = "forex";
	$connection = mysqli_connect($dbhost,$dbuserName,$dbPassword,$dbName);
    if(mysqli_connect_errno()){
                die("there is an error in database".mysqli_connect_error());    
    }
	date_default_timezone_set("Africa/Cairo");
	$open = date("H:i",strtotime("8:00"));
	$close = date("H:i",strtotime("19:00"));
	$time = date("H:i");
	$return_arr = array();
	$query = 'SELECT * FROM alert WHERE 1 =0';
	if ($_POST['Search'] == '') {
        
		if ($time > $open && $time < $close) {
			$query = "SELECT * FROM alert WHERE date LIKE '".date("Y-m-d")."'";
		}
	}
	else {
		$query = "SELECT * FROM alert WHERE date LIKE '".$_POST['Search']."'";
	}
	$execute_query = mysqli_query($connection,$query);
	$x=0;
	while($row = mysqli_fetch_array($execute_query)){
		$currency = $row['currency'];
    	$power = $row['power'];
    	$time = $row['time'];
    	$date = $row['date'];
		$return_arr[] = array("currency" => $currency,
                    "power" => $power,
                    "time" => $time,
                    "date" => $date);
	}
	echo json_encode($return_arr);
?>