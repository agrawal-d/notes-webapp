<?php
session_start();
session_destroy();
		$newURL = "login.php?error=LOGOUT";
	header('Location: '.$newURL);

?>