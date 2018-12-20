<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "notes";


/*
$servername = "localhost";
$username = "id6330674_hereisdx";
$dbName = "id6330674_notes";
$password = "Lorem@123!0t";
*/
$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
	$newURL = "sql-fail.php";
	header('Location: '.$newURL);
	exit();

    //die("Connection failed: " . $conn->connect_error);
} 

?>