<?php 
	include ("connect.php");
	session_start();
	$ten = "";
	$sql = "";
	if(isset($_GET['search'])){
		$ten = $_GET['search_field'];
		$sql = "select * from product where name like N'%".$ten."%'";
		$result = mysqli_query($conn,$sql);
		$_SESSION['result'] = $result;
	}
	
	header("location:index.php");
	
?>