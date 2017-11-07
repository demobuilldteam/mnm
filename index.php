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
</head>
<body>
	<!-- head -->
	<?php include 'head.php' ?>
	<!-- content -->
	<div class="content">
		<div class="container">
			<!-- left content -->
			<?php
				include 'menu_left_content.php'
			?>
			<div class="right_content">
				<!-- list new products -->
				<div class="new_product">
					
					<?php 
						include ("connect.php");
						$ten = "";
						// $demo ="";
						// $price = "";
						$sql = "";
						if(isset($_GET['search'])){
							$ten = $_GET['search_field'];
							$sql = "select ten,mota from products where ten	like '%$ten%'";
							$result = mysqli_query($conn,$sql);
							
								
					?>
						<h4>Your search</h4>
						<div class="row">
							<?php 
								while($row = mysqli_fetch_array($result)){
							?>
								<div class="col-md-3 col-xs-12 col-sm-6 item_new">
									<h5><?php echo $row['ten']; ?></h5>
									<div class="image">
										<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
									</div>
									<div class="info_product">
										<p><span>price</span></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
									</div>
									<div class="button">
										<div class="add_card">
											add to cart
										</div>
										<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
									</div>
								</div>
							<?php 
								}
							 ?>
						</div>
					<?php 
						}else{
					?>
						<h4>New Product</h4>
						<div class="row">
								<div class="col-md-3 col-xs-12 col-sm-6 item_new">
									<h5>product's name</h5>
									<div class="image">
										<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
									</div>
									<div class="info_product">
										<p><span>price</span></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
									</div>
									<div class="button">
										<div class="add_card">
											add to cart
										</div>
										<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="col-md-3 col-xs-12 col-sm-6 item_new">
									<h5>product's name</h5>
									<div class="image">
										<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
									</div>
									<div class="info_product">
										<p><span>price</span></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
									</div>
									<div class="button">
										<div class="add_card">
											add to cart
										</div>
										<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="col-md-3 col-xs-12 col-sm-6 item_new">
									<h5>product's name</h5>
									<div class="image">
										<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
									</div>
									<div class="info_product">
										<p><span>price</span></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
									</div>
									<div class="button">
										<div class="add_card">
											add to cart
										</div>
										<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="col-md-3 col-xs-12 col-sm-6 item_new">
									<h5>product's name</h5>
									<div class="image">
										<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
									</div>
									<div class="info_product">
										<p><span>price</span></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
									</div>
									<div class="button">
										<div class="add_card">
											add to cart
										</div>
										<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
									</div>
								</div>
						
						</div>
					<?php 	
						}
					 ?>
				</div>
				<!-- list FEATURED PRODUCTS -->
				<div class="new_product">
					<h4>featured products</h4>
					<div class="row">
						<div class="col-md-3 col-xs-12 col-sm-6 item_new">
							<h5>product's name</h5>
							<div class="image">
								<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
							</div>
							<div class="info_product">
								<p><span>price</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
							</div>
							<div class="button">
								<div class="add_card">
									add to cart
								</div>
								<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
							</div>
						</div>
						<div class="col-md-3 col-xs-12 col-sm-6 item_new">
							<h5>product's name</h5>
							<div class="image">
								<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
							</div>
							<div class="info_product">
								<p><span>price</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
							</div>
							<div class="button">
								<div class="add_card">
									add to cart
								</div>
								<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
							</div>
						</div>
						<div class="col-md-3 col-xs-12 col-sm-6 item_new">
							<h5>product's name</h5>
							<div class="image">
								<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
							</div>
							<div class="info_product">
								<p><span>price</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
							</div>
							<div class="button">
								<div class="add_card">
									add to cart
								</div>
								<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
							</div>
						</div>
						<div class="col-md-3 col-xs-12 col-sm-6 item_new">
							<h5>product's name</h5>
							<div class="image">
								<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
							</div>
							<div class="info_product">
								<p><span>price</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
							</div>
							<div class="button">
								<div class="add_card">
									add to cart
								</div>
								<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				
		    </div>  
		</div>
	</div>
	<?php include 'foot.php' ?>
	
</body>
</html>