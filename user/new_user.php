<?php 
	session_start();	
	if(isset($_GET['submit'])){
		include ("../connect.php");
		// $target = "../images/".basename($_FILES['image']['name']);
		// if(isset($_FILES['image'])){
		// 		   echo $_FILES['image']['tmp_name'];
		// }
		$filename = $_FILES['image']['name'];
		if(empty($_FILES) || !isset($_FILES['image'])){
			$file_tmp = $_FILES['image']['tmp_name'];
		}
		// echo $filename;
		$fullname = $_GET['fullname'];
		$address = $_GET['address'];
		$company = $_GET['company'];
		$email = $_GET['email'];
		$password = $_GET['password'];
		$passwordconfirm = $_GET['confirmpassword'];

		move_uploaded_file($file_tmp,"uploads/.$filename");
		$qr = "insert into User(image,fullname,address,company,email_address,password,password_confirm) values ('{$filename}','{$fullname}','{$address}','{$company}','{$email}','{$password}','{$passwordconfirm}')";

		if(mysqli_query($conn,$qr)==true){
			// echo "successful";
			$_SESSION['notice'] = "You created a new account successful!! Welcome to our Shop";
		}
		mysqli_close($conn);
	}
?>