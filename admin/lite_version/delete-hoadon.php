<?php 
	session_start();
	if(isset($_GET['id'])){
		include ("../../connect.php");
		$id = $_GET['id'];
		$qr = "delete from receipt where id_receipt='$id' ";
		// echo $qr;
		
		if(mysqli_query($conn,$qr)){
			$_SESSION['noti-err-pr'] = "You deleted succesful";
			header("location:table-hoadon.php");
		}
		else{
			echo mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>