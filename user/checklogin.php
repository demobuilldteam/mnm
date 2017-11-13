<?php 
	session_start();
	include ("../connect.php");
	if($_SERVER["REQUEST_METHOD"]="POST"){
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$pass = mysqli_real_escape_string($conn,$_POST['pass']);

		$qr = "select * from User where email_address='{$email}' and password='{$pass}'";
		$rs = mysqli_query($conn,$qr);
		if(mysqli_num_rows($rs)>0){
			header("location:../index.php");
		}else{
			$_SESSION['errlogin'] = "Email address or password is invaild!";
			header("location:login.php");
		}
	}

?>