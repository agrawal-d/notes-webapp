<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "notes";



$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
	$newURL = "sql-fail.php";
	header('Location: '.$newURL);
	exit();

    //die("Connection failed: " . $conn->connect_error);
} 

?>