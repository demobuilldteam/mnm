<?php
	session_start();
	if (isset($_SESSION['fullname'])) {
		unset($_SESSION['fullname']);
		header("location:../index.php");
	}
?>
