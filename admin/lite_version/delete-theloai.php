<?php 
	session_start();
	if(isset($_GET['maloai'])){
		include ("../../connect.php");
		$maloai = $_GET['maloai'];
		$qr = "delete from loai where maloai='$maloai' ";
		// echo $qr;
		
		if(mysqli_query($conn,$qr)){
			$_SESSION['noti-delete-loai'] = "You deleted succesful";
			header("location:table-loai.php");
		}
		else{
			echo mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>