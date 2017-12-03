<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SHOP MOTORCYCLES</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<?php 
	// session_start();
	include ("connect.php");
	if(isset($_POST['submit'])){
		$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$mess = mysqli_real_escape_string($conn,$_POST['mess']);

		$qr = "insert into feedback(fullname,email,messages) values ('{$fullname}','{$email}','{$mess}')";
		if(mysqli_query($conn,$qr)==true){
			$_SESSION['note_feedback'] = "Thank you feedbacked for us!";
			
		}else{
			$_SESSION['note_feedback'] = "Had a few error!!";
		}
		mysqli_close($conn);
		// header("location:contact.php");
		// echo $qr;
	}
?>
</head>
<body>
<div class="head">
	<div class="menu">
		<div class="container">
			<div class="menu_left">
				<ul>
					<li><a href="index.php" id="home">home</a></li>
					<li><a href="newproduct.php" id="new">new products</a></li>
					<li><a href="allproduct.php" id="all">all products</a></li>
					<li><a href="special.php" id="specials">specials</a></li>
					<li><a href="contact.php" id="contact">contacts</a></li>
					<li><a href="#" id="review">reviews</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<a href="index.php"><img id="img_moto" src="images/iconmoto2.png" alt="" width="70" height="60"></a>
					<a href="index.php"><h3>MOTORCYCLES</h3></a>
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
					<i class="fa fa-shopping-cart  fa-3x" aria-hidden="true"></i>
					<!-- <h4>shopping cart: </h4> -->
					<i class="fa fa-bars ccc" aria-hidden="true">
					</i>
					<div class="list_menu">
						<ul>
							<li><a href="" id="">my account</a></li>
							<li><a href="user/login.php" id="">Login</a></li>
							<li><a href="" id="">sign up</a></li>
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
				<a href="index.php"><i class="fa fa-home" aria-hidden="true"> / </i></a>
				<p>Contact us</p>
			</div>
			<?php
				include 'menu_left_content.php'
			?>
			<div class="right_content">
				<div class="contect">
					<h4>Contact Us</h4>
					<div class="us">
						<h5>Frteam-2017</h5>
						<p>If you have anything questions or wonder please write down and send it for us.Thank you!!</p>
					</div>
					<?php 
						if (isset($_SESSION['note_feedback'])) {
					?>
							<div class="alert alert-success">
								<?php echo $_SESSION['note_feedback']; ?>
							</div>
					<?php
						session_destroy();
						}
					?>
					<form action="contact.php" method="POST"  role="form">
						<div class="form-group">
							<label  for="">Full Name <span style="color: red;">*</span>: </label>
							<input type="text" class="form-control" id="" name="fullname" >
						</div>
						<div class="form-group">
							<label  for="">Email Addess <span style="color: red;">*</span>: </label>
							<input type="email" class="form-control" id="" name="email" >
						</div>
						<div class="form-group">
							<label  for="">Messages <span style="color: red;"></span>: </label>
							<textarea class="form-control" name="mess" id="" cols="40" rows="10"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit" value="submit"><i class="fa fa-paper-plane fa-2x" aria-hidden="true"><span style="font-size: 18px;line-height: 43px;padding-left: 5px;">Please,send it for us!</span></i></button>
						</div>

					</form>					
				</div>
			</div>
		</div>
	</div>
	<?php
		include 'foot.php'
	?>
</div>	
</body>