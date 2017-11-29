<?php session_start(); ?>
<div class="head">
	<div class="menu">
		<div class="container">
			<div class="menu_left">
				<ul>
					<li><a href="index.php" >home</a></li>
					<li><a href="newproduct.php" id="new">new products</a></li>
					<li><a href="allproduct.php" id="all">all products</a></li>
					<li><a href="special.php" id="specials">specials</a></li>
					<li><a href="contact.php" id="contact">contacts</a></li>
					<li><a href="#" id="review">reviews</a></li>
				</ul>
			</div>
			<?php 
				if(isset($_SESSION['fullname'])){
					
			?>
				<div class="menu_right">
					<ul>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['fullname']; ?></a></li>
						<li><a href="user/logout.php"><?php echo "Log out"; ?></a></li>
						<?php 
							if(isset($_SESSION['rule'])){
						?>
						<li><a href="admin/lite_version/pages-profile.php"><?php echo "Admin"; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			<?php
				}
			?>	
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
					<form action="index.php" method="GET" class="form-inline" role="form">
						<div class="form-group">
							<input type="text" class="input_css"  placeholder="search" name="search_field">
						</div>
						<button type="submit" class="butn_search" name="search" value="search"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 shop">
					<i class="fa fa-shopping-cart fa-3x " aria-hidden="true"></i>
					<h4>shopping cart: </h4>
					<i class="fa fa-bars ccc" aria-hidden="true">
					</i>
					<div class="list_menu">
						<ul>
							<li><a href="#" >my account</a></li>
							<li><a href="user/login.php">Login</a></li>
							<li><a href="user/signup.php" >sign up</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="wethear">
					<div class="form-group">
					    <div class="col-md-6">
					    	<div class="row">
					    		<input id="city" type="text" class="form-control" placeholder="Enter your city's name!">
					    	</div>
					    	<span style="color:red;" id="error_city"></span>
							<div class="row">
								<button type="submit" id="show_wethear" style="width:300px;margin: 0px auto;margin-left:10%;" class="btn btn-primary">View wethear</button>
							</div>
					    </div>
					</div>
					
					<div class="rowdata col-md-6" style="padding-left: 10%;">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
