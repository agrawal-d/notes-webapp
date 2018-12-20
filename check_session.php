<?php
session_start();
if($_SESSION["logged_in"]!="true"){
		$newURL = "login.php?error=NOT_LOGGED_IN";
	header('Location: '.$newURL);
	exit();
}

?>