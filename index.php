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
					var maloai = $(this).attr('loai');
					// alert(gender);
					$.get("xuly.php",{maloais: maloai},function(data){
						$('.add_p').html(data);
						// alert(data);
					});
				});
				$('.sub_item').click(function(event) {
					var conditions = $(this).attr('ten');

					var arr = conditions.split('-');
					var kieu = arr[0];
					var loai = arr[1];
					// alert(kieu+loai);
					$.get("xulyloai.php",{kieux: kieu,loaix: loai},function(data){
						// alert(data);
						$('.add_p').html(data);
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
							$sql = "select * from product where ten	like '%$ten%'";
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
											<img src="images/<?php echo $row['image']; ?>" class="image_new" alt="" width="150" height="150">
										</div>
										<div class="info_product">
											<p><span><?php echo $row['gia']; ?></span></p>
											<p class="mota"><?php echo $row['mota']; ?></p>
										</div>
										<div class="button">
											<div class="add_card">
												<a href="info_product.php?id=<?php echo $ro['id']; ?>" style="text-decoration: none;color: white;">add to cart</a>
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
								<?php 
									include ("connect.php");
									$sql = "select * from product order by created DESC,ten ASC limit 4";
									$result = mysqli_query($conn,$sql);
									while($ro = mysqli_fetch_array($result)){

								?>
									<div class="col-md-3 col-xs-12 col-sm-6 item_new">
										
										<div class="image">
											<img src="images/<?php echo $ro['image']; ?>" class="image_new" alt="" width="150" height="150">
										</div>
										<h5><?php echo $ro['ten']; ?></h5>
										<div class="info_product">
											
											<p class="mota"><?php echo $ro['mota']; ?></p>
											<p><span>
												<?php 
													$english_format_number = number_format($ro['gia']);
													echo $english_format_number; 
													?>
											VND</span></p>
										</div>
										<div class="button">
											<div class="add_card">
												<a href="info_product.php?id=<?php echo $ro['id']; ?>" style="text-decoration: none;color: white;">add to cart</a>
											</div>
											<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
										</div>
									</div>
								<?php 
									}
								 ?>
							</div>
						</div>
						<div class="new_product">
							<h4>featured products</h4>
							<div class="row">
								<?php 
									include ("connect.php");
									$sql = "select * from product order by gia ASC,ten ASC limit 4";
									$result = mysqli_query($conn,$sql);
									while($ro = mysqli_fetch_array($result)){

								?>
									<div class="col-md-3 col-xs-12 col-sm-6 item_new">
										
										<div class="image">
											<img src="images/<?php echo $ro['image']; ?>" class="image_new" alt="" width="150" height="150">
										</div>
										<h5><?php echo $ro['ten']; ?></h5>
										<div class="info_product">
											
											<p class="mota"><?php echo $ro['mota']; ?></p>
											<p><span>
												<?php 
													$english_format_number = number_format($ro['gia']);
													echo $english_format_number; 
													?>
											VND</span></p>
										</div>
										<div class="button">
											<div class="add_card">
												<a href="info_product.php?id=<?php echo $ro['id']; ?>" style="text-decoration: none;color: white;">add to cart</a>
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
						}
					 ?>
				</div>
				<!-- list FEATURED PRODUCTS -->
				
		    </div>  
		</div>
	</div>
	<?php include 'foot.php' ?>
	<div class="back_top"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></div>
	<script src="js/wethear.js"></script>

	<script>
		function myMap() {
		  var myCenter = new google.maps.LatLng(16.054407,108.202167);
		  var mapCanvas = document.getElementById("map");
		  var mapOptions = {center: myCenter, zoom: 5};
		  var map = new google.maps.Map(mapCanvas, mapOptions);
		  var marker = new google.maps.Marker({position:myCenter});
		  marker.setMap(map);

		  // Zoom to 9 when clicking on marker
		  google.maps.event.addListener(marker,'click',function() {
		    map.setZoom(9);
		    map.setCenter(marker.getPosition());
		  });
		}
	</script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-PVEwxvxIPSiiHzvGt0isp460L9qH1Ro&callback=moto-shop"
  type="text/javascript"></script>
</body>
</html>