<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caravan_database";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$firstname = $_POST['firstname'] ?? '';
$surname = $_POST['surname'] ?? '';
$email = $_POST['email'] ?? '';
$username = $_POST['username'] ?? '';
$password_raw = $_POST['password'] ?? '';
$dob = $_POST['dob'] ?? '';

// Combine first + last name for the 'name' column
$fullname = $firstname . ' ' . $surname;

// Hash the password securely
$password_hashed = password_hash($password_raw, PASSWORD_DEFAULT);

// Prepare SQL (more secure using prepared statements)
$stmt = $conn->prepare("INSERT INTO users (username, email, password, name, birthday) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $username, $email, $password_hashed, $fullname, $dob);

if ($stmt->execute()) {
    // Registration successful, redirect to login page with a success message
    header("Location: registration.php?status=success");
} else {
    // Registration failed, return to registration page with an error message
    header("Location: registration.php?status=error");

$stmt->close();
$conn->close();
?>