<?php 
	session_start();
	if($_GET["submit"]){
		include ("../connect.php");
		$fullname = $_GET['fullname'];
		$address = $_GET['address'];
		$company = $_GET['company'];
		$email = $_GET['email'];
		$password = $_GET['password'];
		$passwordconfirm = $_GET['confirmpassword'];

		$qr = "insert into User values ('{$fullname}','{$address}','{$company}','{$email}','{$password}','{$passwordconfirm}')";

		if(mysqli_query($conn,$qr)==true){
			// echo "successful";
			$_SESSION['notice'] = "You created a new account successful!! Welcome to our Shop";
			header("location:signup.php");
		}else{
			echo "Error ".$qr."<br>".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>