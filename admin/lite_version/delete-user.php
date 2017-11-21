<?php 
	session_start();
	if(isset($_GET['email_address'])){
		include ("../../connect.php");
		$email_address = $_GET['email_address'];
		$password = $_GET['password'];
		$qr = "delete from User where email_address='$email_address' and password='$password'";
		// echo $qr;
		if(mysqli_query($conn,$qr)){
			$_SESSION['noti-delete'] = "You deleted succesful";
			header("location:table-user.php");
		}
		else{
			echo mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>