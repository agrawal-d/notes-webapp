<?php
session_start();

include 'mysql_values.php';


// Create connection


$email = htmlspecialchars($_POST["email"]);
$password = $_POST["password"];
$password = md5($password);
// Check connection
if ($conn->connect_error) {
	$newURL = "sql-fail.php";
	header('Location: '.$newURL);
	exit();

    //die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
	//$_SESSION["username"] = $row["username"];
	$_SESSION["logged_in"] = "true";
	$_SESSION["email"] = $row["email"];
	$_SESSION["fname"] = $row["fname"];
	$_SESSION["lname"] = $row["lname"];
	$newURL = "notes.php";
	header('Location: '.$newURL);
}}else{
	$location = "login.php?error=INVALID_CREDENTIALS";
	header('Location: '.$location);
	exit();
}
?>