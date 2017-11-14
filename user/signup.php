<?php 
session_start();
 ?>
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
					<h4>shopping cart: </h4>
					<i class="fa fa-bars ccc" aria-hidden="true">
					</i>
					<div class="list_menu">
						<ul>
							<li><a href="" id="">my account</a></li>
							<li><a href="" id="">Login</a></li>
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
				<a href="../index.php"><i class="fa fa-home" aria-hidden="true"> / </i></a>
				<p>Login</p>
			</div>
			<?php
				include '../menu_left_content.php'
			?>
			<div class="right_content">
				<?php 
					
					if(isset($_SESSION['notice'])){
				?>
				<div class="alert alert-success" role="alert"><?php echo $_SESSION['notice']; ?></div>	
				<?php	
					session_destroy();
					}else{
				?>
				<div class="login">
					<h4>Sign up</h4>
					<form action="new_user.php" method="get"  role="form" >
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
</div>	
</body>