<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caravan_rental";

//start connection to the caravan_rental database
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//put entries into variables to be added to an sql statement
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute SQL statement to fetch user info
$sql_query = $connection->prepare("SELECT * FROM users WHERE username = ?");
$sql_query->bind_param("s", $username);
$sql_query->execute();
$result = $sql_query->get_result();

//checks if user exists in database and if the password matches the record too
try{
	if ($result->num_rows === 1) {
		$row = $result->fetch_assoc();
		if (password_verify($password, $row['password'])) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['name'] = $row['name'];
			$page_key = $row['password'];
			$id= $row['userID'];
			header("Location: caravans.php?id=$id&key=$page_key&ignore=0"); //i need this to be the page they were last on
			$sql_query->close();
			$connection->close();
			exit();
		} else {
			header("Location: login.php?status=e1");
			$sql_query->close();
			$connection->close();
			exit();
		}
	} else {
		header("Location: login.php?status=e2");
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