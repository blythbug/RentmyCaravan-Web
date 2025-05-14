<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caravan_rental";


//start connection to the caravan_rental database
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$id = $_GET['id'];
$page_key = $_GET['key'];
$parts = parse_url($checkedpage);


// Prepare and execute SQL statement to fetch user info
$sql_query = $connection->prepare("SELECT * FROM users WHERE userID = ?");
$sql_query->bind_param("s", $id);
$sql_query->execute();
$result = $sql_query->get_result();

$checkedpage = $_SERVER['HTTP_REFERER'];
$sections = parse_url($checkedpage);
$path = $sections['path'];


try{
	if ($result->num_rows === 1) {
		$row = $result->fetch_assoc();
		if ($page_key === $row['password']) {
			header("Location: $path?id=$id&key=$page_key&ignore=1");
			$sql_query->close();
			$connection->close();
			exit();
		} else {
			header("Location: login.php?status=e20");
			$sql_query->close();
			$connection->close();
			exit();
		}
	} else {
		header("Location: login.php?status=e21");
		$sql_query->close();
		$connection->close();
		exit();
	}
}catch(mysqli_sql_exception $error){
	header("Location: login.php?status=e404");
	$sql_query->close();
	$connection->close();
	exit();
}


?>