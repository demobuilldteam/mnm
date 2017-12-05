<?php 
	session_start();
	include ("connect.php");
	if(isset($_SESSION['email_address'])) {
			$fullname = $_SESSION['fullname'];
			$email = $_SESSION['email_address'];
			$tong = $_SESSION['tongtien'];

			
			$listid = $_SESSION['listid'];
			$qr  = "SELECT * from product where id in ($listid)";

			$rs = mysqli_query($conn,$qr);
			$qrid = "SELECT id_receipt FROM receipt order by id_receipt DESC LIMIT 1";
			$rsid = mysqli_query($conn,$qrid);
			while($rid = mysqli_fetch_array($rsid)){
				$i = $rid['id_receipt'];
			}
			$i += 1;
			while($row = mysqli_fetch_array($rs)){
				$masp = $row['id'];
				$ten = $row['ten'];
				$tenkh = $_SESSION['fullname'];
				$sl = $_SESSION['cart'][$masp];
				$gia = $row['gia'];
				$qrc = "insert into receipt values($i,$masp,N'$ten',N'$tenkh',$sl,$gia)";
				$slu = $row['soluong'] - $sl;
				$qrup = "update product set soluong = $slu where id = $masp";

				if(mysqli_query($conn,$qrc)){
					mysqli_query($conn,$qrup);
				}
			}
			// $qr = "insert into infocart(fullname,email,tongtien) values ('$fullname','$email','$tong')";
			// echo $qr;
			// if(mysqli_query($conn,$qr)){
			// 	echo "<script>
			// 		alert('You payed goods succesful - Thank you');
			// 	</script>";
				unset($_SESSION['cart']);
				unset($_SESSION['listid']);
				$_SESSION['noti_c'] = "s";
				header("location:index.php");
				
			// }else{
			// 	echo mysqli_error($conn);	
			// }

	}else{
		header("location:user/login.php");
	}
?>