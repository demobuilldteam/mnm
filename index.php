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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<script>
		$(document).ready(function($) {
			$('.title').click(function(event) {
				var gender = $(this).attr('gender');
				// alert(gender);

				$.get("xuly.php",{gender_id: gender},function(data){
					$('.add_p').html(data);
					// alert(data);
				});
			});
		});
	</script>
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

				<!-- carousel -->
				<div class="slide">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					    <!-- Indicators -->
					    <ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					      <li data-target="#myCarousel" data-slide-to="1"></li>
					      <li data-target="#myCarousel" data-slide-to="2"></li>
					    </ol>

					    <!-- Wrapper for slides -->
					    <div class="carousel-inner">

					      <div class="item active">
					        <img src="images/slide1.jpg" alt="Los Angeles" style="width:100%;height: 521;">
					        <div class="carousel-caption">
					          <h3>Los Angeles</h3>
					          <p>LA is always so much fun!</p>
					        </div>
					      </div>

					      <div class="item">
					        <img src="images/slide4.jpg" alt="Chicago" style="width:100%;height: 521;">
					        <div class="carousel-caption">
					          <h3>Chicago</h3>
					          <p>Thank you, Chicago!</p>
					        </div>
					      </div>
					    
					      <div class="item">
					        <img src="images/slide3.jpg" alt="New York" style="width:100%;height: 521;">
					        <div class="carousel-caption">
					          <h3>New York</h3>
					          <p>We love the Big Apple!</p>
					        </div>
					      </div>
					  
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					      <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" data-slide="next">
					      <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
					      <span class="sr-only">Next</span>
					    </a>
					</div>
					
				</div>
								
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
						<div class="add_p ">
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
						</div>
					<?php 
						}else{
					?>
						<h4>New Product</h4>
						<div class="row">
							<div class="add_p">
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
	<div class="back_top"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></div>
</body>
</html>