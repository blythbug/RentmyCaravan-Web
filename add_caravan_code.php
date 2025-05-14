<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caravan_database";

//start connection to the caravan_rental database
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//put entries into variables to be added to an sql statement
$model = $_POST['model'];
$registration = $_POST['registration'];
$rental_cost = $_POST['rental_cost'];
$toilet = $_POST['toilet'];
$kitchen = $_POST['kitchen'];
$available_start = $_POST['available_start'];
$available_end = $_POST['available_end'];
$tempdate = new DateTime($dob);
$curentdate = new DateTime();


try {
	//create SQL query ready to pass into database
	$sql_query = $connection->prepare("INSERT INTO caravans (model, rental_cost, registration, toilet, kitchen, available_start, available_end) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$sql_query->bind_param("sssssss", $model, $rental_cost, $registration, $toilet, $kitchen, $available_start, $available_end); //prevents SQL injection by registering everything as a string

	//https://dev.mysql.com/doc/mysql-errors/9.3/en/ SEARCH HERE FOR ERROR CODES
	//checks if successful or failed and the result is passed as part of the URL so that the next code can read it
	//ERROR CODES I HAVE USED
	// 0    =  no ERROR
	// 15   = passwords mismatch
	// 16   = User is impossibly old
	// 17   = User is below 18
	// 404  = Fatal unknown error
	//  1101 = Email is invalid
	// 1062 = an entry already exists in database
	// 1406 = an entry is too long for its fild
	
	
	if ($sql_query->execute()) { //successful registration
		header("Location: add_caravan.php?status=e0");
		$sql_query->close();
		$connection->close();
		exit();
	}else { //unknown error and I added this as a just in case
		header("Location: add_caravan.php?status=e404");
		$sql_query->close();
		$connection->close();
		exit();
	}
}catch (mysqli_sql_exception $error){
	$errno = $error->getCode();
	if($sql_query->errno ===  1101){ //Email is invalid
		header("Location: add_caravan.php?status=e1101");
		$sql_query->close();
		$connection->close();
		exit();
	}elseif($sql_query->errno === 1062){//If entry is too long
		header("Location: add_caravan.php?status=e1062");
		$sql_query->close();
		$connection->close();
		exit();
	}elseif($sql_query->errno === 1406){//If entry is too long
		header("Location: add_caravan.php?status=e1406");
		$sql_query->close();
		$connection->close();
		exit();
	}else { //unknown error and I added this as a just in case
		header("Location: add_caravan.php?status=e404");
		$sql_query->close();
		$connection->close();
		exit();
	}
}

?>
