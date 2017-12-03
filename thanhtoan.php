<?php 
	session_start();
	include ("connect.php");
	if(isset($_SESSION['email_address'])) {
			$fullname = $_SESSION['fullname'];
			$email = $_SESSION['email_address'];
			$tong = $_SESSION['tongtien'];

			$qr = "insert into infocart(fullname,email,tongtien) values ('$fullname','$email','$tong')";
			// echo $qr;
			if(mysqli_query($conn,$qr)){
				echo "<script>
					alert('You payed goods succesful - Thank you');
				</script>";
				unset($_SESSION['cart']);
				header("location:index.php");
				
			}else{
				echo mysqli_error($conn);	
			}

	}else{
		header("location:user/login.php");
	}
?>