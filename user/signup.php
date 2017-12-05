<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SHOP MOTORCYCLES</title>
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/index.js"></script>
	<script>
		function checkpass(){
			var password = document.getElementById('pass').value;
			var passwordconfirm = document.getElementById('passconfirm').value;
			if (password!=passconfirm) {
				document.getElementById('errpass').innerHTML = "Password confrim must equal password!";
				document.getElementById('errpass').style.color = "red";
			}
		}
	</script>
	<script src="../js/load.js"></script>
	<?php 	session_start(); ?>
	
</head>
<body>
<div class="head">
	<div class="menu">
		<div class="container">
			<div class="menu_left">
				<ul>
					<li><a href="../index.php" id="home">home</a></li>
					<li><a href="../newproduct.php" id="new">new products</a></li>
					<li><a href="../allproduct.php" id="all">all products</a></li>
					<li><a href="../special.php" id="specials">specials</a></li>
					<li><a href="../contact.php" id="contact">contacts</a></li>
					<li><a href="#" id="review">reviews</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<a href="../index.php"><img id="img_moto" src="../images/iconmoto2.png" alt="" width="70" height="60"></a>
					<a href="../index.php"><h3>MOTORCYCLES</h3></a>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<form action="" method="POST" class="form-inline" role="form">
						<div class="form-group">
							<input type="text" class="input_css" id="" placeholder="search">
						</div>
						<button type="submit" class="butn_search"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 shop">
					<i class="fa fa-shopping-cart fa-3x " aria-hidden="true"></i>
					<!-- <h4>shopping cart: </h4> -->
					<i class="fa fa-bars ccc" aria-hidden="true">
					</i>
					<div class="list_menu">
						<ul>
							<li><a href="" id="">my account</a></li>
							<li><a href="login.php" id="">Login</a></li>
							<li><a href="signup.php" id="">sign up</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<!-- left content -->
			<div class="link">
				<a href="../index.php"><i class="fa fa-home" aria-hidden="true"> / </i></a>
				<p>Login</p>
			</div>
			<!-- menu left -->
			<!-- menu_left -->
			<div class="menu_left_content">
				<div class="menu_left_top">
					<!-- 1 -->
					<div class="menu_left_level1">
						<div class="title" loai="ml01">
							<p>Mũ bảo hiểm</p>
						</div>

						<i class="fa fa-angle-double-right fa1" aria-hidden="true"></i>
					</div>
					<ul class="menu_sub sub1">
							<li class="sub_item" ten="dammtrax-ml01">MŨ DAMMTRAX 3/4</li>
							<li class="sub_item" ten="GXT-ml01">Mũ lật hàm GXT</li>
							<li class="sub_item" ten="Andes-ml01">Mũ Andes</li>
							<li class="sub_item" ten="GRS-ml01">Mũ GRS</li>
					</ul>


					<!-- 2 -->
					<div class="menu_left_level1">
						<div class="title" loai="ml10">
							<p>Xe</p>
						</div>
						<i class="fa fa-angle-double-right fa2" aria-hidden="true"></i>
					</div>
					<ul class="menu_sub sub2">
							<li ten="moto-ml10" class="sub_item" id="">MôTô</li>
							<li ten="ga-ml10" class="sub_item" id="">Tay Ga</li>
							
					</ul>

					<!-- 3 -->
					<div class="menu_left_level1">
						<div class="title">
							<p>Phụ kiện</p>
						</div>
						
						<i class="fa fa-angle-double-right fa3" aria-hidden="true"></i>
					</div>
					<ul class="menu_sub sub3">
							<li><a href="#" id="">Ốc vít</a></li>
							<li><a href="#" id="">Đèn led</a></li>
							<li><a href="#" id="">HANDLING</a></li>
							<li><a href="#" id="">ENGINE</a></li>
					</ul>
					<!-- 4 -->
					<div class="menu_left_level1">
						<div class="title" loai="ml05">
							<p>Vành xe</p>
						</div>
						
						
					</div>
					<!-- 5 -->
					<div class="menu_left_level1">
						<div class="title" loai="ml07">
							<p>Lốp</p>
						</div>
						
						
					</div>
					<!-- 6 -->
					<div class="menu_left_level1" >
						<div class="title" loai="ml04">
							<p>Áo khoác</p>
						</div>
						
						
					</div>
					<!-- 7 -->
					<div class="menu_left_level1">
						<div class="title" loai="ml06">
							<p>Giày</p>
						</div>
						
						
					</div>
					<div class="menu_left_level1">
						<div class="title" loai="ml06">
							<p>Đông cơ</p>
						</div>
									
					</div>
				</div>
				<div class="menu_left_bottom">
					<h4>specials</h4>
					<?php 
						include ("../connect.php");

						$qr = "select * from product order by soluong DESC limit 2";
						$rs = mysqli_query($conn,$qr);
						while($row = mysqli_fetch_array($rs)){
					?>
					<div class="item_product">
						<img src="../images/<?php echo $row['image']; ?>" alt="" width="100" height="50">
						<div class="item_content">
							<p><?php echo $row['ten'];?></p>
							<p><span>
								<?php 
									$english_format_number = number_format($row['gia']);
									echo $english_format_number; 
									?>
							VND</span></p>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="wethear">
					<h4>Wethear Today</h4>
					<div class="row">
						<div class="form-group">
						    <div class="col-md-6">
						    	<div class="row">
						    		<input id="city" type="text" class="form-control" placeholder="Enter your city's name!">
						    	</div>
						    	<span style="color:red;" id="error_city"></span>
								<div class="row">
									<button type="submit" id="show_wethear"  class="btn btn-primary">View wethear</button>
								</div>
						    </div>
						</div>
						
						<div class="rowdata col-md-6">
							
						</div>
						
					</div>
				</div>
			</div>
			<div class="right_content">
				<?php 
					include ("../connect.php");
					if(isset($_POST['submit'])){
						// $target = "../images/".basename($_FILES['image']['name']);
						// if(isset($_FILES['image'])){
						// 		   echo $_FILES['image']['tmp_name'];
						// }
						$filename = $_FILES['hinhanh']['name'];
						// if(empty($_FILES) || !isset($_FILES['hinhanh'])){
						$file_tmp = $_FILES['hinhanh']['tmp_name'];
						move_uploaded_file($file_tmp,'../images/'.$filename);
						// }
						// echo $filename;
						$fullname = $_POST['fullname'];
						$address = $_POST['address'];
						$company = $_POST['company'];
						$email = $_POST['email'];
						$password = $_POST['password'];
						$passwordconfirm = $_POST['confirmpassword'];

						$qr = "insert into User(image,fullname,address,company,email_address,password,password_confirm) values ('{$filename}','{$fullname}','{$address}','{$company}','{$email}','{$password}','{$passwordconfirm}')";

						if(mysqli_query($conn,$qr)==true){
							// echo "successful";
							$_SESSION['notice'] = "You created a new account successful!! Welcome to our Shop";
						}
						mysqli_close($conn);
					}
					if(isset($_SESSION['notice'])){
				?>
				<div class="alert alert-success" role="alert"><?php echo $_SESSION['notice']; ?></div>	
				<?php	
					session_destroy();
					}else{
				?>
				<div class="login">
					<h4>Sign up</h4>
					<form action="signup.php" method="POST"  enctype="multipart/form-data">
						<div class="form-group">
							<label  for="">Your Avatar <span style="color: red;">*</span>: </label>
							<input type="file" class="form-control" name="hinhanh" >
						</div>
						<div class="form-group">
							<label  for="">Full Name <span style="color: red;">*</span>: </label>
							<input type="text" class="form-control" name="fullname" required>
						</div>
						<div class="form-group">
							<label  for="">Address <span style="color: red;">*</span>: </label>
							<input type="text" class="form-control" name="address" required>
						</div>
						<div class="form-group">
							<label  for="">Company<span style="color: blue;">*</span>: </label>
							<input type="text" class="form-control" name="company" required>
						</div>
						<div class="form-group">
							<label  for="">Email Addess <span style="color: red;">*</span>: </label>
							<input type="email" class="form-control" name="email">
						</tdiv>
						<div class="form-group">
							<label  for="">Password <span style="color: red;">*</span>: </label>
							<input type="Password" class="form-control" name="password" id="pass" required>
						</div>
						<div class="form-group">
							<label  for="">Confirm Password <span style="color: red;">*</span>: </label>
							<input type="Password" class="form-control" name="confirmpassword" id="passconfirm" required onblur="checkpass();">
							<p id="errpass"></p>
						</div>
						<button type="submit" class="btn btn-info" value="submit" name="submit">Sign up</button>
						<div class="sig">
							<span >or you had a account? </span> <div class="nut_sing"><a href="login.php">Login</a></div>
						</div>
					</form>					
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<?php
		include '../foot.php'
	?>
	<script src="../js/wethear.js"></script>
</div>	
</body>