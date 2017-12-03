<?php 
	session_start();
	if (isset($_GET['id'])) {
		$sl = $_GET['soluong'];
		$id = $_GET['id'];
		echo $sl;
		echo $id;
		$_SESSION['cart'][$id] = $sl;
		// echo $_SESSION['cart'][$id];
		header("location:listcart.php");
	}
?>